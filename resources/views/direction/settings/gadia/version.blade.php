<section style="display: none;" class="tabcontent" id="version">
    <div class="w-full">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <x-gadia-logo class="transition block h-20 w-auto text-gray-900 dark:text-gray-100 mb-4" />
                <div
                    class="transition justify-between flex items-center p-4 bg-gray-100 rounded-lg shadow-lg dark:bg-gray-800 mb-1">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 mr-4 text-gray-700 dark:text-gray-200" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                        <div>
                            <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                Version {{ $version->version }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500 tooltip" data-title="16/03/2022 à 12:00">
                                Dernière vérification {{ Carbon\Carbon::createFromFormat('U', strtotime('03/16/2022 12:00'))->diffForHumans() }}
                            </p>
                            <a class="text-sm font-semibold text-purple-500 dark:text-purple-500 -mt-1" target="_blank"
                                href="https://gadia.valbion.com/changelog.php">
                                Note de publication
                            </a>
                        </div>
                    </div>
                    <div id="loading" class="hidden text-sm font-semibold text-gray-500 dark:text-gray-500">
                        <x-round-loader class="w-7 h-7 mr-6" />
                        <span class="mt-1">Recherche de mise à
                            jour...</span>
                    </div>
                    <div id="errorLoading" class="hidden text-sm font-semibold text-gray-500 dark:text-gray-500">
                        <svg class="w-8 h-8 mr-4 text-red-500 dark:text-red-400" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                            </path>
                        </svg>
                        <span class="mt-1">Une erreur est survenue</span>
                    </div>
                    <button id="search"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Chercher une mise à jour
                    </button>
                </div>
                <div id="uptodate"
                    class="transition flex items-center p-4 bg-green-300 rounded-lg shadow-lg dark:bg-green-800 text-green-600 dark:text-green-200">
                    <svg class="w-6 h-6 mr-3 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                            Gadia est à jour
                        </p>
                    </div>
                </div>

                <div id="updateAvailable"
                    class="hidden transition justify-between items-center p-4 bg-yellow-300 rounded-lg shadow-lg dark:bg-yellow-800 text-yellow-600 dark:text-yellow-200">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-3 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-bold text-gray-700 dark:text-gray-200">
                                Une mise à jour est disponible : <span id="versionAvailable"
                                    class="font-light">v0.0.2</span>
                            </p>
                            <button class="mt-4 ml-4 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                                Télécharger et installer
                            </button>
                        </div>
                    </div>
                    <div>
                        <a class="text-sm font-semibold text-gray-700 dark:text-gray-200 -mt-1" target="_blank"
                            href="https://gadia.valbion.com/changelog.php">
                            Voir les nouveautés
                        </a>
                    </div>
                </div>

                <div class="mt-10 mb-3 text-lg text-gray-700 dark:text-gray-200 font-semibold">
                    Informations supplémentaires
                </div>
                <div
                    class="transition justify-between flex items-center p-4 bg-gray-100 rounded-lg shadow-lg dark:bg-gray-800 mb-1">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 mr-4 text-gray-700 dark:text-gray-200" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <path d="M13 7H7v6h6V7z"></path>
                            <path fill-rule="evenodd"
                                d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                Laravel v{{ Illuminate\Foundation\Application::VERSION }}
                            </p>
                            <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                PHP v{{ PHP_VERSION }}
                            </p>
                            <span class="mt-2 font-semibold text-xs text-gray-500 dark:text-gray-500">Extensions</span>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                cURL v{{ curl_version()['version'] }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                BCMath v{{ phpversion('bcmath') }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                CType v{{ phpversion('ctype') }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                DOM v{{ phpversion('dom') }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                Fileinfo v{{ phpversion('fileinfo') }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                JSON v{{ phpversion('json') }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                Mbstring v{{ phpversion('mbstring') }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                OpenSSL v{{ phpversion('openssl') }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                PCRE v{{ phpversion('pcre') }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                PDO v{{ phpversion('pdo_mysql') }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                Tokenizer v{{ phpversion('tokenizer') }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                XML v{{ LIBXML_VERSION }}
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">
                                Zip v{{ phpversion('zip') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var loading = document.getElementById('loading');
    var search = document.getElementById('search');
    var error = document.getElementById('errorLoading');

    search.addEventListener('click', function () {
        loading.classList.remove('hidden');
        loading.classList.add('inline-flex');
        search.classList.add('hidden');
        search.classList.remove('inline-flex');

        setTimeout(function () {
            loading.classList.remove('inline-flex');
            loading.classList.add('hidden');

            error.classList.remove('hidden');
            error.classList.add('inline-flex');
        }, 20000);
    });

</script>
