<?php $page_name = 'Connexion'; ?>
<?php http_response_code(403) ?>
<?php header("Refresh:60; url='/'") ?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body oncontextmenu="return false">

    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                        src="https://source.unsplash.com/collection/4702951/random" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                        src="https://source.unsplash.com/collection/3101394/random" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                            Vous n'êtes pas autorisé à continuer
                        </h1>

                        <div
                            class="p-2 mb-2 flex items-center justify-between text-sm font-semibold dark:text-red-100 dark:bg-red-600 text-red-600 bg-red-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red">
                            <div class="flex items-center m-2">
                                <span>Vous tentez d'acceder à un espace qui est actuellement désactivé !</span>
                            </div>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-500">
                            L'espace « <code class="font-semibold">{{ $space }}</code> » est actuellement désactivé par un administrateur, il devrait être de nouveau disponible très prochainement.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>
