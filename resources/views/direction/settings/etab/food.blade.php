<form style="display: none;" class="tabcontent" id="food" action="{{ route('settings.etab.save.logo') }}" method="POST">
    @csrf
    <div class="w-full">
        <div>
            <label class="font-medium text-sm text-gray-700 dark:text-gray-400">
                Paramètres de gestion de la demi-pension
            </label>

            <div class="mt-3">
                <div class="form-check mt-2">
                    <input name="restEnabled"
                        class="form-check-input appearance-none rounded h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="checkbox" id="restEnabled" <?php if ($journey['day']) { echo 'checked'; } ?>>
                    <label class="form-check-label inline-block text-gray-800 dark:text-gray-300" for="restEnabled">
                        Activer la demi-pension
                    </label>
                </div>

                <div class="grid flex-wrap w-full">
                    <div class="w-2/3">
                        <div class="mt-3">
                            <label class="font-medium text-sm text-gray-700 dark:text-gray-400">
                                Jours concernés par la demi-pension
                            </label>
                        </div>
                        <div class="flex">
                            <div class="form-check mr-6">
                                <input type="checkbox" name="dpMonday" id="dpMonday"
                                    class="form-check-input appearance-none rounded h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    <?php if ($journey['day']) { echo 'checked'; } ?>>
                                <label for="dpMonday"
                                    class="form-check-label inline-block text-gray-800 dark:text-gray-300">Lundi</label>
                            </div>
                            <div class="form-check mr-6">
                                <input type="checkbox" name="dpTuesday" id="dpTuesday"
                                    class="form-check-input appearance-none rounded h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    <?php if ($journey['day']) { echo 'checked'; } ?>>
                                <label for="dpTuesday"
                                    class="form-check-label inline-block text-gray-800 dark:text-gray-300">Mardi</label>
                            </div>
                            <div class="form-check mr-6">
                                <input type="checkbox" name="dpWednesday" id="dpWednesday"
                                    class="form-check-input appearance-none rounded h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    <?php if ($journey['day']) { echo 'checked'; } ?>>
                                <label for="dpWednesday"
                                    class="form-check-label inline-block text-gray-800 dark:text-gray-300">Mercredi</label>
                            </div>
                            <div class="form-check mr-6">
                                <input type="checkbox" name="dpThursday" id="dpThursday"
                                    class="form-check-input appearance-none rounded h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    <?php if ($journey['day']) { echo 'checked'; } ?>>
                                <label for="dpThursday"
                                    class="form-check-label inline-block text-gray-800 dark:text-gray-300">Jeudi</label>
                            </div>
                            <div class="form-check mr-6">
                                <input type="checkbox" name="dpFriday" id="dpFriday"
                                    class="form-check-input appearance-none rounded h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    <?php if ($journey['day']) { echo 'checked'; } ?>>
                                <label for="dpFriday"
                                    class="form-check-label inline-block text-gray-800 dark:text-gray-300">Vendredi</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="dpSaturday" id="dpSaturday"
                                    class="form-check-input appearance-none rounded h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    <?php if ($journey['day']) { echo 'checked'; } ?>>
                                <label for="dpSaturday"
                                    class="form-check-label inline-block text-gray-800 dark:text-gray-300">Samedi</label>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/3">
                        <div class="mt-3">
                            <label class="font-medium text-sm text-gray-700 dark:text-gray-400">
                                Horaires pour la demi-pension
                            </label>
                        </div>
                        <div class="flex">
                            <label class="inline-block text-gray-800 dark:text-gray-300 mt-2">De</label>
                            <div class="ml-2 mr-2">
                                <input type="time" name="dpStart" id="dpStart"
                                    class="block w-full text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    value="<?php if ($journey['day']) { echo 'checked'; } ?>">
                            </div>
                            <label class="inline-block text-gray-800 dark:text-gray-300 mt-2">a</label>
                            <div class="ml-2">
                                <input type="time" name="dpEnd" id="dpEnd"
                                    class="block w-full text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    value="<?php if ($journey['day']) { echo 'checked'; } ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 flex flex-wrap">

                </div>

                <div class="mt-3">
                    <label class="font-medium text-sm text-gray-700 dark:text-gray-400">
                        Décompte automatique des repas à préparer en fonction des absents du jour
                    </label>
                </div>
                <div>
                    <p>Vous pouvez activer un décompte automatique des repas à préparer en fonction des absences saisies
                        le jour même. Quand le décompte est activé :
                        <ul>
                            <li>Les repas du jour sont annulés si les absences dépassent l'heure limite du repas et si elles
                                sont saisies avant l'heure de décompte</li>
                            <li>Les repas des jours suivants sont annulés si les absences dépassent l'heure limite du repas</li>
                        </ul>
                    </p>
                </div>
            </div>


        </div>
    </div>
</form>
