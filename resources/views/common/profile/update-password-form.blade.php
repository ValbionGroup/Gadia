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

                <x-auth-validation-errors />

                <x-session-error-success />

                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4">
                        <label class="block text-sm mb-2">
                            <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Mot de passe
                                actuel</span>
                            <x-input type="password" name="current-password" :value="old('password')" autocomplete="current-password" required />
                        </label>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label class="block text-sm mb-2">
                            <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Nouveau mot de
                                passe</span>
                            <x-input type="password" name="new-password" :value="old('password')" autocomplete="new-password" required />
                        </label>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label class="block text-sm mb-2">
                            <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Confirmation</span>
                            <x-input type="password" name="new-password_confirmation" :value="old('password')" autocomplete="new-password" required />
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
