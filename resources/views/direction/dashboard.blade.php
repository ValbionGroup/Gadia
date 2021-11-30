<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body oncontextmenu="return false">
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('direction.modules.navbar')
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.header')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Tableau de bord <span class="font-medium text-sm">- Espace {{ $spaceType }}</span>
                    </h2>

                    <div class="grid gap-6 mb-8 xl:grid-cols-8 md:grid-cols-1">
                        <div
                            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 xl:col-start-1 xl:col-span-3">
                            <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                                Cours non assurés ‒ <span class="font-medium text-xs">Semaine en cours</span>
                            </h4>
                            <div class="flex justify-center p-2" style="display: block;">
                                {{-- @include('direction.modules.dashboard.courses') --}}
                            </div>
                        </div>
                        <div
                            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 xl:col-start-4 xl:col-span-3">
                            <h4 class="font-semibold text-gray-600 dark:text-gray-300">
                                Données vie scolaire ‒ <span class="font-medium text-xs">Semaine en cours</span>
                            </h4>
                            <div class="justify-between p-2 grid grid-rows-5 grid-flow-col gap-6"
                                style="display: block;">
                                {{-- @include('direction.modules.dashboard.viesco') --}}
                            </div>
                        </div>

                        <div
                            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 xl:col-start-7 xl:col-span-2">
                            <h4 class="mb-2 font-semibold text-gray-600 dark:text-gray-300">
                                Agenda
                            </h4>
                            <div class="flex justify-center p-2 gap-6" style="display: block;">
                                {{-- @include('direction.modules.dashboard.agenda') --}}
                            </div>
                        </div>

                        <div
                            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 xl:col-start-1 xl:col-span-3">
                            <h4 class="mb-2 font-semibold text-gray-600 dark:text-gray-300">
                                Données professeurs ‒ <span class="font-medium text-xs">Semaine en cours</span>
                            </h4>
                            <div class="flex justify-center p-2" style="display: block;">
                                {{-- @include('direction.modules.dashboard.profs') --}}
                            </div>
                        </div>

                        <div
                            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 xl:col-start-4 xl:col-span-3">
                            <h4 class="mb-2 font-semibold text-gray-600 dark:text-gray-300">
                                Incidents ‒ <span class="font-medium text-xs">Semaine en cours</span>
                            </h4>
                            <div class="flex justify-center p-2 gap-6" style="display: block;">
                                {{-- @include('direction.modules.dashboard.incidents') --}}
                            </div>
                        </div>

                        <div
                            class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 xl:col-start-7 xl:col-span-2">
                            <h4 class="mb-2 font-semibold text-gray-600 dark:text-gray-300">
                                Interconnexion</span>
                            </h4>
                            <div class="flex justify-center p-2" style="display: block;">
                                {{-- @include('direction.modules.dashboard.connect') --}}
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
