<form class="tabcontent" id="identity" action="{{ route('settings.etab.save.identity') }}" method="POST">
@csrf
<div class="w-full">
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block text-sm mb-2">
                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">
                    Type d'établissement <svg data-title="Exemple : Lycée Général et Technologique"
                        data-placement="top" class="tooltip w-4 h-4 inline-flex" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="etab-type" placeholder="Lycée Général et Technologique"
                    autocomplete="off" value="{{ $schooltype }}" />
            </label>
        </div>

        <div class="w-full md:w-1/2 px-3">
            <label class="block text-sm mb-2">
                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Nom de
                    l'établissement</span>
                <input
                    class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="etab-name" placeholder="Jean Paul" autocomplete="off"
                    value="{{ $schoolname }}" required />
            </label>
        </div>

        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block text-sm mb-2">
                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">
                    Type d'étab. en diminutif <svg
                        data-title="Exemple : Lycée à la place de Lycée Général et Technologique ou ÉREA pour établissements régionaux d'enseignement adapté"
                        data-placement="top" class="tooltip w-4 h-4 inline-flex" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="etab-dim" placeholder="Lycée" autocomplete="off"
                    value="{{ $typedim }}" />
            </label>
        </div>

        <div class="md:w-2/3"></div>

        <div class="w-full md:w-2/6 px-3 mb-6 md:mb-0">
            <label class="block text-sm mb-2">
                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">
                    Ville
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="city" placeholder="Paris" autocomplete="off"
                    value="{{ $adresscity }}" />
            </label>
        </div>

        <div class="w-full md:w-1/6 px-3">
            <label class="block text-sm mb-2">
                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Code
                    postal</span>
                <input
                    class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="zip" placeholder="72000" autocomplete="off" maxlength="5"
                    pattern="[0-9]{5}" value="{{ $adresszip }}" />
            </label>
        </div>

        <div class="w-full md:w-2/6 px-3 mb-6 md:mb-0">
            <label class="block text-sm mb-2">
                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">
                    Région
                </span>
                <select disabled
                    class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="state" autocomplete="off">
                    <option value="null">Sélectionne dans la liste...</option>
                </select>
            </label>
        </div>

        <div class="w-full md:w-1/6 px-3 mb-6 md:mb-0">
            <label class="block text-sm mb-2">
                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">
                    Département
                </span>
                <select disabled
                    class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="dep" autocomplete="off">
                    <option value="null">Il reste...</option>
                </select>
            </label>
        </div>

        <div class="w-full md:w-4/6 px-3 mb-6 md:mb-0">
            <label class="block text-sm mb-2">
                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">
                    Adresse
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="adress" autocomplete="off" value="{{ $adress }}" />
            </label>
        </div>

        <div class="w-full md:w-2/6 px-3 mb-6 md:mb-0">
            <label class="block text-sm mb-2">
                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">
                    Code <abbr title="" data-title="Unité Administrative Immatriculée"
                        class="tooltip">UAI</abbr> <svg
                        data-title="Le code du Répertoire National des Établissements de votre établissement"
                        data-placement="top" class="tooltip w-4 h-4 inline-flex" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="uai" placeholder="0470009E" pattern="[0-9]{7}[A-Z]{1}"
                    maxlength="8" autocomplete="off" value="{{ $codeuai }}" />
            </label>
        </div>

    </div>
</div>
</form>
