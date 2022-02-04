<form style="display: none;" class="tabcontent" id="calendar" action="#">
    <div class="w-full">
        <div class="flex flex-wrap gap-4">
            <div class="w-full md:w-2/3 justify-center">
                <label class="font-medium text-sm text-gray-700 dark:text-gray-400">Tableau des vacances & jours
                    fériés</label>
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        @if (count($vacations) > 0)
                        <table class="shadow-outline-red shadow-lg w-full whitespace-no-wrap" style="table-layout: fixed;">
                            <thead>
                                <tr
                                    class="text-center text-xs font-semibold tracking-wide text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3 w-1" style="width: 15%;">Férié du</th>
                                    <th class="px-4 py-3 w-1" style="width: 15%;">Au</th>
                                    <th class="px-4 py-3 w-2" style="width: 30%;">Libellé</th>
                                    <th class="px-4 py-3 w-1" style="width: 5%;"></th>
                                </tr>
                            </thead>
                            <tbody
                                class="divide-y dark:divide-gray-700 dark:bg-gray-800 bg-gray-50 font-light text-sm text-gray-700 dark:text-gray-200  dark:divide-gray-600">
                                @foreach ($vacations as $vacation)
                                <tr class="h-8 text-center">
                                    <td class="font-bold">{{ $vacation->start_date; }}</td>
                                    <td class="font-bold">{{ $vacation->end_date; }}</td>
                                    <td>{{ $vacation->name; }}</td>
                                    <td class="pl-2">
                                        <div class="flex items-center">
                                            <a href="#edit" class="mr-2 tooltip" data-title="Modifier le nom">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="#delete" class="mr-2 tooltip" data-title="Supprimer">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="text-center p-2 text-gray-700 dark:text-gray-400">Aucune vacance de renseignée</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="justify-center">
                <label class="font-medium text-sm text-gray-700 dark:text-gray-400">Actions</label>
                <div class="flex flex-col justify-center items-center">
                    <a class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        href="{{ route('settings.etab.calendar.getNewVacations') }}">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <label>Récupérer les vacances et les jours fériés</label>
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>
