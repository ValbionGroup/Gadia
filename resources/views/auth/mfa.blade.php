<?php $page_name = 'Authentification à plusieurs facteurs'; ?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body oncontextmenu="return false">

    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                        src="https://source.unsplash.com/collection/4702951/random" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                        src="https://source.unsplash.com/collection/3101394/random" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                            Vérification supplémentaire
                        </h1>

                        <p class="mb-4 text-sm text-gray-600 dark:text-gray-500">
                            <span class="font-bold">Bienvenue {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</span>.<br/>
                            Veuillez confirmer l'accès à votre compte en saisissant le code d'authentification fourni
                            par votre application d'authentification.
                        </p>

                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <x-auth-validation-errors :errors="$errors" />

                        <form method="POST" action="{{ route('login.2fa') }}">
                            @csrf

                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Entrez le code OTP</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="012345" name="one_time_password" :value="old('one_time_password')"
                                    type="code" inputmode="numeric" autocomplete="one-time-code" required autofocus />
                            </label>

                            <button
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Valider
                            </button>

                        </form>

                        <hr class="my-8 dark:border-gray-700 border-gray-200" />

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button
                                class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Déconnexion
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>
