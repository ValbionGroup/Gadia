<?php $page_name = 'Confirmer votre mot de passe'; ?>
<!DOCTYPE html>
<html :class="{ 'dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
                            Veuillez entrer votre mot de passe pour valider l'action en cours. Ceci est une mesure de sécurité pour protéger les paramètres sensibles.
                        </p>

                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <x-auth-validation-errors :errors="$errors" />

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Entrez votre mot de passe</span>
                                <x-input placeholder="***************" type="password" name="password" required autocomplete="current-password" />
                            </label>

                            <button
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Continuer
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
