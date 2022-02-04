<form style="display: none;" class="tabcontent" id="period" action="{{ route('settings.etab.save.logo') }}"
    method="POST">
    @csrf
    <div class="w-full">
        <div class="">
            <label class="font-medium text-sm text-gray-700 dark:text-gray-400">
                Définition des différentes périodes
            </label>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr
                                class="text-center text-xs dark:divide-gray-700 font-semibold tracking-wide text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 divide-x">
                                <th class="px-4 py-3 w-1/3">Notation trimestrielle</th>
                                <th class="px-4 py-3 w-1/3">Notation semestrielle</th>
                                <th class="px-4 py-3 w-1/3">Notation continue</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y dark:divide-gray-700 dark:bg-gray-800 bg-gray-50 text-center">
                            <tr>
                                <td class="p-2 text-sm font-normal text-gray-700 dark:text-gray-300">
                                    Fin 1re trimestre :
                                    <input
                                        class="block w-full text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        type="date">
                                </td>
                                <td class="p-2 text-sm font-normal text-gray-700 dark:text-gray-300">
                                    Fin 1re semestre :
                                    <input
                                        class="block w-full text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        type="date">
                                </td>
                                <td class="p-2 text-sm font-normal text-gray-700 dark:text-gray-300">
                                    Fin de l'année :
                                    <input
                                        class="block w-full text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        type="date">
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-sm font-normal text-gray-700 dark:text-gray-300">
                                    Fin 2e trimestre :
                                    <input
                                        class="block w-full text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        type="date">
                                </td>
                                <td class="p-2 text-sm font-normal text-gray-700 dark:text-gray-300">
                                    Fin 2e semestre :
                                    <input
                                        class="block w-full text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        type="date">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="p-2 text-sm font-normal text-gray-700 dark:text-gray-300">
                                    Fin 3e trimestre :
                                    <input
                                        class="block w-full text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        type="date">
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-4">
                <label class="mt-4 font-medium text-sm text-gray-700 dark:text-gray-400">
                    Définition des différentes périodes
                </label>
                <div>

                </div>
            </div>
        </div>
    </div>
</form>
