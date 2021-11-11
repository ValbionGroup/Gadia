<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body oncontextmenu="return false">
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('eleve.modules.navbar')
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.header')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Tableau de bord <span class="font-medium text-sm">- Espace {{ $spaceType }}</span>
                    </h2>
                    <!-- CTA -->
                    @include('eleve.modules.dashboard.cta')
                    <!-- Cards -->
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
                                    Prochain cours
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    S.E.S. <span class="text-xs font-medium">(303)</span>
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
                                    Contrôle à venir
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    {{ $tests }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div
                                class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd"
                                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Moyenne générale
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    {{ $moyenne }}<span class="text-xs font-medium">/20</span>
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            @include('eleve.modules.cards.situationState')
                        </div>
                    </div>

                    <style>
                        .date:after {
                            content: "";
                            position: absolute;
                            border-top: 1px solid #e2e8f0;
                            top: 12px;
                            width: 150px;
                        }

                        .date:after {
                            margin-left: 15px;
                        }

                    </style>
                    <div class="grid gap-6 mb-8 xl:grid-cols-8 md:grid-cols-1">
                        <div
                            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 xl:col-start-1 xl:col-span-3">
                            <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                                Emploi du temps ‒ <span class="font-medium text-xs">Semaine {{ $edtweek }}</span>
                            </h4>
                            <div class="flex justify-center p-2" style="display: block;">
                                @include('eleve.modules.dashboard.edt')
                            </div>
                        </div>
                        <div
                            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 xl:col-start-4 xl:col-span-2">
                            <h4 class="font-semibold text-gray-600 dark:text-gray-300">
                                Dernières notes ‒ <span class="font-medium text-xs"> {{ $period }}</span>
                            </h4>
                            <div class="justify-between p-2 grid grid-rows-5 grid-flow-col gap-6"
                                style="display: block;">
                                @include('eleve.modules.dashboard.grades')
                            </div>
                        </div>

                        <div
                            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 xl:col-start-6 xl:col-span-3">
                            <h4 class="mb-2 font-semibold text-gray-600 dark:text-gray-300">
                                Travail à faire pour demain
                            </h4>
                            <div class="flex justify-center p-2 gap-6" style="display: block;">
                                @include('eleve.modules.dashboard.cdt')
                            </div>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>

    @include('layouts.footer')
</body>

</html>
