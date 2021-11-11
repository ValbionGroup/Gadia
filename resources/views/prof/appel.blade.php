@extends('direction.modules.layouts')

@section('title')
Feuille d'appel <span class="font-medium text-sm">- 28/09/2021</span>
@endsection

@section('content')

<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
    <!-- Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div
            class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Horaires
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                8h00 - 9h00
            </p>
        </div>
    </div>
    <!-- Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div
            class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Classe / Groupe
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                PREMIERE 2
            </p>
        </div>
    </div>
    <!-- Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div
            class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Nombre d'élèves
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                3 présent
            </p>
        </div>
    </div>
    <!-- Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div
            class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                État
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                Non réalisé
            </p>
        </div>
    </div>
</div>

<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap" style="table-layout: fixed;">
            <thead>
                <tr
                    class="divide-x divide-gray-300 dark:divide-gray-600 text-center text-xs font-semibold tracking-wide text-gray-500 uppercase border-b dark:border-gray-600 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3" style="width: 30%;"><span class="font-bold">3 élèves</span></th>
                    <th class="px-4 py-3 w-1" colspan="2">Absence</th>
                    <th class="px-4 py-3 w-1" colspan="2">Retard</th>
                    <th class="px-4 py-3 w-1" colspan="2">Infirmerie</th>
                    <th class="px-4 py-3 w-1" colspan="2">Punition</th>
                    <th class="px-4 py-3 w-1" colspan="2">Exclusion</th>
                    <th class="px-4 py-3 w-1" colspan="2">Dispense</th>
                </tr>
            </thead>
            <tbody class="dark:bg-gray-800 divide-y divide-gray-300 dark:divide-gray-600 font-light text-sm">
                <tr class="text-gray-700 dark:text-gray-200 h-8 divide-x divide-gray-300 dark:divide-gray-600">
                    <td class="pl-2 bg-gray-200 dark:bg-gray-700"><span class="float-left">ESPIET Lucas</span><span class="float-right mr-2 tooltip" data-title="Délégué titulaire de la classe PREMIERE 2"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M608 320h-64v64h22.4c5.3 0 9.6 3.6 9.6 8v16c0 4.4-4.3 8-9.6 8H73.6c-5.3 0-9.6-3.6-9.6-8v-16c0-4.4 4.3-8 9.6-8H96v-64H32c-17.7 0-32 14.3-32 32v96c0 17.7 14.3 32 32 32h576c17.7 0 32-14.3 32-32v-96c0-17.7-14.3-32-32-32zm-96 64V64.3c0-17.9-14.5-32.3-32.3-32.3H160.4C142.5 32 128 46.5 128 64.3V384h384zM211.2 202l25.5-25.3c4.2-4.2 11-4.2 15.2.1l41.3 41.6 95.2-94.4c4.2-4.2 11-4.2 15.2.1l25.3 25.5c4.2 4.2 4.2 11-.1 15.2L300.5 292c-4.2 4.2-11 4.2-15.2-.1l-74.1-74.7c-4.3-4.2-4.2-11 0-15.2z"/></path></svg></span></td>
                    <td class="text-center"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center"><span class="font-bold text-blue-600 dark:text-blue-300">5'</span></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-200 h-8 divide-x divide-gray-300 dark:divide-gray-600">
                    <td class="pl-2 bg-gray-200 dark:bg-gray-700"><span class="text-red-600 dark:text-red-400 float-left">RIVRAIS NOWAKOWSKI Mathis</span><span class="float-right mr-2 tooltip" data-title="Accompagnant : DESPAGNET Alexis"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 3a1 1 0 012 0v5.5a.5.5 0 001 0V4a1 1 0 112 0v4.5a.5.5 0 001 0V6a1 1 0 112 0v5a7 7 0 11-14 0V9a1 1 0 012 0v2.5a.5.5 0 001 0V4a1 1 0 012 0v4.5a.5.5 0 001 0V3z" clip-rule="evenodd"></path></svg></span><span class="float-right mr-2 tooltip" data-title="PAP (Dyspraxie)"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M434.7 64h-85.9c-8 0-15.7 3-21.6 8.4l-98.3 90c-.1.1-.2.3-.3.4-16.6 15.6-16.3 40.5-2.1 56 12.7 13.9 39.4 17.6 56.1 2.7.1-.1.3-.1.4-.2l79.9-73.2c6.5-5.9 16.7-5.5 22.6 1 6 6.5 5.5 16.6-1 22.6l-26.1 23.9L504 313.8c2.9 2.4 5.5 5 7.9 7.7V128l-54.6-54.6c-5.9-6-14.1-9.4-22.6-9.4zM544 128.2v223.9c0 17.7 14.3 32 32 32h64V128.2h-96zm48 223.9c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM0 384h64c17.7 0 32-14.3 32-32V128.2H0V384zm48-63.9c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16c0-8.9 7.2-16 16-16zm435.9 18.6L334.6 217.5l-30 27.5c-29.7 27.1-75.2 24.5-101.7-4.4-26.9-29.4-24.8-74.9 4.4-101.7L289.1 64h-83.8c-8.5 0-16.6 3.4-22.6 9.4L128 128v223.9h18.3l90.5 81.9c27.4 22.3 67.7 18.1 90-9.3l.2-.2 17.9 15.5c15.9 13 39.4 10.5 52.3-5.4l31.4-38.6 5.4 4.4c13.7 11.1 33.9 9.1 45-4.7l9.5-11.7c11.2-13.8 9.1-33.9-4.6-45.1z"/></svg></span></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"><span class="text-orange-600 dark:text-orange-300 tooltip inline-flex" data-title="Saisie par la vie scolaire" data-placement="top"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></span></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"><span class="tooltip" data-title='2 cours de "S.E.S" manqués depuis 1 mois'>2</span></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-200 h-8 divide-x divide-gray-300 dark:divide-gray-600">
                    <td class="pl-2 bg-gray-200 dark:bg-gray-700"><span class="float-left">WEBSTER Frédéric</span><span class="float-right mr-2 tooltip" data-title="Joyeux anniversaire !"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg></span></td>
                    <td class="text-center"><span class="inline-flex"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></span></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                    <td class="text-center"></td>
                    <td class="text-center bg-gray-200 dark:bg-gray-700"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="text-gray-700 dark:text-gray-200">
    <label for="valid"><input type="checkbox" name="valid" id=""> Appel terminé</label> | 3 élèves présent en salle
</div>
@endsection
