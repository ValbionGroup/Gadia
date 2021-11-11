<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                Double authentification
            </h3>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                Ajoutez une sécurité supplémentaire à votre compte en utilisant l'authentification à deux facteurs.
            </p>
        </div>
        <div class="px-4 sm:px-0"></div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white dark:bg-gray-700 shadow sm:rounded-lg">
            @if ($request->user()->google2fa_secret != NULL OR $request->secret != NULL)
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                Vous avez activé l'authentification à deux facteurs.
            </h3>
            @else
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                Vous n'avez pas activé l'authentification à deux facteurs.
            </h3>
            @endif
            <div class="mt-3 max-w-xl text-sm text-gray-600 dark:text-gray-400">
                <p>
                    Lorsque l'authentification à deux facteurs est activée, un jeton sécurisé et aléatoire vous sera
                    demandé lors de l'authentification. Vous pouvez récupérer ce jeton à partir de l'application Google
                    Authenticator de votre téléphone.
                </p>
            </div>
            <div class="mt-5">
                @if ($request->user()->google2fa_secret != NULL)
                <form action="{{ route('account.mfa.disable') }}" method="POST">
                    @csrf
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                        <span>
                            <button
                                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-800 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition">Désactiver</button>
                        </span>
                    </h3>
                </form>
                @else
                <form action="{{ route('account.mfa.enable') }}" method="POST">
                    @csrf
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                        <span>
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">Activer</button>
                        </span>
                    </h3>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
