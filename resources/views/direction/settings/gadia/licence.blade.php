<form style="display: none;" class="tabcontent" id="licence" action="{{ route('settings.etab.save.logo') }}" method="POST">
    @csrf
    <div class="w-full">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-5/6 px-3 mb-6 md:mb-0">
                <label class="block text-sm mb-2">
                    <span class="font-medium text-sm text-gray-700 dark:text-gray-400">
                        Clef de licence <svg
                            data-title="Entrez ici la clef que vous avez reçue lors de votre souscription à Gadia"
                            data-placement="top" class="tooltip w-4 h-4 inline-flex" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <div
                        class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input value="{{ $license }}"
                            class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                            type="text" maxlength="64" minlength="64" name="license"
                            placeholder="ABC0123XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
                            autocomplete="off" />
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>

                </label>
            </div>

            <div class="w-full md:w-1/6 px-3 mb-6 md:mb-0">
                <label class="block text-sm mb-2">
                    <span class="font-medium text-sm text-gray-700 dark:text-gray-400">
                        Validité <svg data-title="Indique si la clef fournie est valide ou non"
                            data-placement="top" class="tooltip w-4 h-4 inline-flex" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    @if ($licenseState == 0)
                    <div
                        class="inline-flex w-full mt-1 border-0 dark:text-green-100 dark:bg-green-600 text-green-600 bg-green-100 form-input">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">
                            Valide
                        </span>
                    </div>
                    @elseif ($licenseState == 1)
                    <div
                        class="inline-flex w-full mt-1 border-0 dark:text-red-100 dark:bg-red-600 text-red-600 bg-red-100 form-input">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">
                            Non valide
                        </span>
                    </div>
                    @else
                    <div data-title="Impossible de vérifier la validité, l'API de Gadia doit être en maintenance."
                        class="tooltip inline-flex w-full mt-1 border-0 dark:text-gray-100 dark:bg-gray-600 text-gray-600 bg-gray-100 form-input">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">
                            Erreur ({{ $licenseState }})
                        </span>
                    </div>
                    @endif
                </label>
            </div>
        </div>
    </div>
</form>
