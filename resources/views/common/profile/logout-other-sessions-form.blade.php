<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                Sessions utilisées
            </h3>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                Gérez et déconnectez vos sessions actives sur d'autres navigateurs et appareils.
            </p>
        </div>
        <div class="px-4 sm:px-0"></div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white dark:bg-gray-700 shadow sm:rounded-lg">
            <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                <p>
                    Si nécessaire, vous pouvez vous déconnecter de toutes vos autres sessions de navigation sur tous vos
                    appareils. Certaines de vos sessions récentes sont répertoriées ci-dessous ; toutefois, cette liste
                    peut ne pas être exhaustive. Si vous pensez que votre compte a été compromis, vous devez également
                    mettre à jour votre mot de passe.
                </p>
            </div>
            @if (count($sessions) > 0)
            <div class="mt-5 space-y-6">
                <!-- Autres sessions -->
                @foreach ($sessions as $session)
                <div class="flex items-center">
                    <div>
                        @if ($session->agent->isDesktop())
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500">
                            <path
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            class="w-8 h-8 text-gray-500">
                            <path d="M0 0h24v24H0z" stroke="none"></path>
                            <rect x="7" y="4" width="10" height="16" rx="1"></rect>
                            <path d="M11 5h2M12 17v.01"></path>
                        </svg>
                        @endif
                    </div>

                    <div class="ml-3">
                        <div class="text-sm text-gray-600">
                            {{ $session->agent->platform() }} - {{ $session->agent->browser() }}
                        </div>

                        <div>
                            <div class="text-xs text-gray-500">
                                {{ $session->ip_address }},

                                @if ($session->is_current_device)
                                <span class="text-green-500 font-semibold">{{ __('sessions device') }}</span>
                                @else
                                {{ __('Last active') }} {{ $session->last_active }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
            <div class="mt-5">
                <form action="{{ route('account.sessions.logout') }}" method="POST">
                    <span>
                        <button
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">Déconnexion
                            des autres sessions</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
