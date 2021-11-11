<?php $page_name = "Activation de la 2FA"; ?>
@include('common.profile.modules.top')

<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Activation de la double authentification
        </h2>

        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1 flex justify-between">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                                Double authentification
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                                Terminer l'activation de la double authentification pour pouvoir profiter d'une sécurité
                                supplémentaire pour votre compte.
                            </p>
                        </div>
                        <div class="px-4 sm:px-0"></div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 py-5 sm:p-6 bg-white dark:bg-gray-700 shadow sm:rounded-lg">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                                Vous venez d'activer l'authentification à deux facteurs.
                            </h3>
                            <div class="mt-3 max-w-xl text-sm text-gray-600 dark:text-gray-400">
                                <p>
                                    Lorsque l'authentification à deux facteurs est activée, un jeton sécurisé et
                                    aléatoire vous sera demandé lors de l'authentification. Vous pouvez récupérer
                                    ce jeton à partir de l'application Google Authenticator de votre téléphone.
                                </p>
                            </div>
                            @if ($secret != NULL)
                            <div class="mt-4 max-w-xl text-sm text-gray-600 dark:text-gray-400">
                                <p class="font-semibold">
                                    L'authentification à deux facteurs est maintenant activée. Scannez le code QR
                                    suivant en utilisant l'application d'authentification de votre téléphone.
                                </p>
                            </div>
                            <div class="mt-4">
                                <img src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl={{ $qrimage }}" alt="QR Code for 2fa">
                            </div>
                            <div class="mt-4 max-w-xl text-sm text-gray-600 dark:text-gray-400">
                                <p class="font-semibold">
                                    Vous pouvez aussi entrer manuellement le code secret dans votre application,
                                    celui-ci est disponible ci-dessous. <span class="font-bold">Ne le partager à
                                        personne !</span>
                                </p>
                            </div>
                            <div
                                class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 dark:bg-gray-600 rounded-lg text-gray-600 dark:text-gray-100">
                                <div>{{ $secret }}</div>
                            </div>
                            @endif
                            <div class="mt-5">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                                    <a href="{{ route('profile') }}">
                                        <span
                                            class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-800 focus:outline-none focus:border-green-900 focus:ring focus:ring-green-300 disabled:opacity-25 transition">C'est
                                            bon !</button>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@include('layouts.footer')
