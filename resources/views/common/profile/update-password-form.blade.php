<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                Mettre à jour le mot de passe
            </h3>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester sécurisé.
            </p>
        </div>
        <div class="px-4 sm:px-0"></div>
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ route('account.password.change') }}" method="POST">
            @csrf
            <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">

                @if ($errors->any())
                <div
                    class="p-2 mb-3 flex items-center justify-between text-sm font-semibold dark:text-red-100 dark:bg-red-600 text-red-600 bg-red-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>
                            Quelques erreurs sont survenues :
                            <ul class="list-disc list-inside text-sm dark:text-red-100 text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </span>
                    </div>
                </div>
                @endif

                @if (session('error'))
                <div
                    class="p-2 mb-3 flex items-center justify-between text-sm font-semibold dark:text-red-100 dark:bg-red-600 text-red-600 bg-red-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ session('error') }}</span>
                    </div>
                </div>
                @endif

                @if (session('success'))
                <div
                    class="p-2 mb-3 flex items-center justify-between text-sm font-semibold dark:text-green-100 dark:bg-green-600 text-green-600 bg-green-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-green">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
                @endif

                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4">
                        <label class="block text-sm mb-2">
                            <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Mot de passe
                                actuel</span>
                            <input
                                class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                type="password" name="current-password" :value="old('password')"
                                autocomplete="current-password" required />
                        </label>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label class="block text-sm mb-2">
                            <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Nouveau mot de
                                passe</span>
                            <input
                                class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                type="password" name="new-password" :value="old('password')" autocomplete="new-password"
                                required />
                        </label>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label class="block text-sm mb-2">
                            <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Confirmation</span>
                            <input
                                class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                type="password" name="new-password_confirmation" :value="old('password')"
                                autocomplete="new-password" required />
                        </label>
                    </div>
                </div>
            </div>
            <div
                class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <button
                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                    Sauvegarder
                </button>
            </div>
        </form>
    </div>
</div>
