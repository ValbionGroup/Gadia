<form style="display: none;" class="tabcontent" id="day" action="{{ route('settings.etab.save.journey') }}" method="POST">
    @csrf
    <div class="w-full">
        <div class="">
            <label class="font-medium text-sm text-gray-700 dark:text-gray-400">Pause de la mi journée et demi-journées
                non travaillées <svg id="dayInfo" data-placement="top" class="w-4 h-4 inline-flex" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
            </label>

            <div class="mt-3">
                <div class="form-check">
                    <input name="day"
                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="radio" id="continue" value="continue" <?php if ($journey['day'] == 'continue') { echo 'checked'; } ?>>
                    <label class="form-check-label inline-block text-gray-800 dark:text-gray-300" for="continue">
                        Journée continue
                    </label>
                </div>
                <div class="form-check">
                    <input name="day"
                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="radio" id="pause" value="pause" <?php if ($journey['day'] == 'pause') { echo 'checked'; } ?>>
                    <label class="form-check-label inline-block text-gray-800 dark:text-gray-300" for="pause">
                        Journée avec une pause restauration
                    </label>
                </div>

                <div class="form-check mt-2">
                    <input name="fullHours"
                        class="form-check-input appearance-none rounded h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="checkbox" id="fullHours" <?php if ($journey['full_hours'] == 1) { echo 'checked'; } ?>>
                    <label class="form-check-label inline-block text-gray-800 dark:text-gray-300" for="fullHours">
                        Recommencer en heure pleines après la pause de la mi-journée
                    </label>
                </div>
            </div>

            <style>
                #indication {
                    writing-mode: vertical-lr;
                }

                .noWork {
                    background-color: inherit;
                    background-image: repeating-linear-gradient(-45deg, transparent, transparent 15px, rgba(218, 79, 79, 0.5) 15px, rgba(218, 79, 79, 0.5) 20px);
                }
            </style>
            <div class="mt-8 w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                                class="text-center text-xs dark:divide-gray-700 font-semibold tracking-wide text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 divide-x">
                                <th class="px-4 py-3 divide-x-0" style="width: 0%">
                                    <svg data-title="Cliquez sur les demi-journées non travaillées" data-placement="top" class="tooltip w-4 h-4 inline-flex"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </th>
                                <th class="px-4 py-3" style="width: 10%;">Lundi</th>
                                <th class="px-4 py-3" style="width: 10%;">Mardi</th>
                                <th class="px-4 py-3" style="width: 10%;">Mercredi</th>
                                <th class="px-4 py-3" style="width: 10%;">Jeudi</th>
                                <th class="px-4 py-3" style="width: 10%;">Vendredi</th>
                                <th class="px-4 py-3" style="width: 10%;">Samedi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y dark:divide-gray-700 dark:bg-gray-800 bg-gray-50">
                            <tr class="h-32">
                                <td id="indication"
                                    class="uppercase text-center font-light text-sm dark:text-gray-500 text-gray-400">
                                    Matin</td>
                                @foreach ($journey['journeys'] as $jry)
                                    <td id="{{ $jry->day }}M" class="<?php if ($jry->state == 1 or $jry->state == 3) { echo 'noWork'; } ?>"><input id="{{ $jry->day }}M_input" type="hidden" name="{{ $jry->day }}M" value="<?php if ($jry->state == 1 or $jry->state == 3) { echo 'disabled'; } ?>"/></td>
                                @endforeach
                            </tr>
                            <tr class="h-32">
                                <td id="indication"
                                    class="uppercase text-center font-light text-sm dark:text-gray-500 text-gray-400">
                                    Après-midi</td>
                                @foreach ($journey['journeys'] as $jry)
                                    <td id="{{ $jry->day }}A" class="<?php if ($jry->state == 2 or $jry->state == 3) { echo 'noWork'; } ?>"><input id="{{ $jry->day }}A_input" type="hidden" name="{{ $jry->day }}A" value="<?php if ($jry->state == 2 or $jry->state == 3) { echo 'disabled'; } ?>"/></td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>

<div id="dayInfoContent" style="display: none;">
    <b>Mi-journée</b><br>
    La pause de la mi-journée permet de délimiter les demi-journées de travail.
    L'onglet demi-pension permet de gérer cette pause en définissant des services de demi-
    pension. <br>
    <br>
    <b>Demi-journées non travaillées</b><br>
    Elles correspondent à des zones de fermetures de l'établissement. Elles sont interdites au
    calculateur pour le placement automatique et signalée lors d'un placement manuel.
    Ces demi-journées ne sont jamais considérées comme libres. Vous pouvez en plus définir les
    journées qui doivent être ignorées lors du calcul des journées libres.
    <i>Exemple : Si le samedi après-midi est non ouvré, et que vous l'ignorez dans le calcul des
        journées libres, un professeur ayant son samedi matin de libre aura une ½ journée libre et non
        1 journée complète.</i><br />
    Un clic sur une demi-journée la rend non travaillée, elle devient rouge.<br />
    <br>
    <b>Qu'est ce qu'une demi-journée ?</b><br />
    Les demi-journées sont séparées soit par la pause de la mi-journée, soit par la demi-pension.<br />
    Selon les situations c'est l'heure de début, de fin ou l'horaire intermédiaire de cette pause qui
    délimite la demi-journée.
</div>

<script>
    const dayInfoContent = document.getElementById('dayInfoContent');

    tippy('#dayInfo', {
        content: dayInfoContent.innerHTML,
        allowHTML: true,
        onMount(instance) {
            instance.setProps({
                arrow: false,
            })
        }
    });

    const mondayM = document.getElementById('mondayM');
    const tuesdayM = document.getElementById('tuesdayM');
    const wednesdayM = document.getElementById('wednesdayM');
    const thursdayM = document.getElementById('thursdayM');
    const fridayM = document.getElementById('fridayM');
    const saturdayM = document.getElementById('saturdayM');
    const mondayA = document.getElementById('mondayA');
    const tuesdayA = document.getElementById('tuesdayA');
    const wednesdayA = document.getElementById('wednesdayA');
    const thursdayA = document.getElementById('thursdayA');
    const fridayA = document.getElementById('fridayA');
    const saturdayA = document.getElementById('saturdayA');

    mondayA.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('mondayA_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('mondayA_input').value = 'disabled';
        }
    }

    tuesdayA.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('tuesdayA_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('tuesdayA_input').value = 'disabled';
        }
    }

    wednesdayA.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('wednesdayA_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('wednesdayA_input').value = 'disabled';
        }
    }

    thursdayA.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('thursdayA_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('thursdayA_input').value = 'disabled';
        }
    }

    fridayA.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('fridayA_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('fridayA_input').value = 'disabled';
        }
    }

    saturdayA.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('saturdayA_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('saturdayA_input').value = 'disabled';
        }
    }

    mondayM.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('mondayM_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('mondayM_input').value = 'disabled';
        }
    }

    tuesdayM.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('tuesdayM_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('tuesdayM_input').value = 'disabled';
        }
    }

    wednesdayM.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('wednesdayM_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('wednesdayM_input').value = 'disabled';
        }
    }

    thursdayM.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('thursdayM_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('thursdayM_input').value = 'disabled';
        }
    }

    fridayM.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('fridayM_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('fridayM_input').value = 'disabled';
        }
    }

    saturdayM.onclick = function () {
        if (this.classList.contains('noWork')) {
            this.classList.remove('noWork');
            document.getElementById('saturdayM_input').value = '';
        } else {
            this.classList.add('noWork');
            document.getElementById('saturdayM_input').value = 'disabled';
        }
    }

</script>
