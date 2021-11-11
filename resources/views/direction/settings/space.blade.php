@extends('direction.modules.layouts')

@section('title')
Gestion des espaces et des connexions
@endsection

@section('content')
<div class="max-w-7xl mx-auto w-full py-10 sm:px-6 lg:px-8">
    @if (session('error'))
    <div
        class="p-2 mb-3 flex items-center justify-between text-sm font-semibold dark:text-red-100 dark:bg-red-600 text-red-600 bg-red-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red">
        <div class="flex items-center">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>{{ session('error') }}</span>
        </div>
    </div>
    @endif

    @if (session('success'))
    <div
        class="p-2 mb-3 flex items-center justify-between text-sm font-semibold dark:text-green-100 dark:bg-green-600 text-green-600 bg-green-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-green">
        <div class="flex items-center">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    </div>
    @endif
    <div class="mt-10 sm:mt-0">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('settings.spaces.save.spacelock') }}" method="POST">
                @csrf
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">

                    <div class="w-full">
                        <div class="flex flex-wrap -mx-3 mb-6">

                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block text-sm mb-2">
                                    <span class="font-semibold text-lg text-gray-700 dark:text-gray-400">
                                        Activation des espaces <svg
                                            data-title="Cocher les espaces dont vous autorisez l'accès"
                                            data-placement="top" class="tooltip w-4 h-4 inline-flex" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <div class="w-full flex">
                                        <label class="w-1/4 mt-1 flex items-center dark:text-gray-400" >
                                            <input type="checkbox" name="eleve" {{ $lock_eleve ? "" : "checked" }}
                                                class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <span class="ml-2">
                                                Élèves
                                            </span>
                                        </label>

                                        <label class="w-1/4 mt-1 flex items-center dark:text-gray-400" >
                                            <input type="checkbox" name="parent" {{ $lock_parent ? "" : "checked" }}
                                                class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <span class="ml-2">
                                                Parents
                                            </span>
                                        </label>

                                        <label class="w-1/4 mt-1 flex items-center dark:text-gray-400" >
                                            <input type="checkbox" name="prof" {{ $lock_prof ? "" : "checked" }}
                                                class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <span class="ml-2">
                                                Professeurs
                                            </span>
                                        </label>

                                        <label class="w-1/4 mt-1 flex items-center dark:text-gray-400" >
                                            <input type="checkbox" name="viescolaire" {{ $lock_viescolaire ? "" : "checked" }}
                                                class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <span class="ml-2">
                                                Vie scolaire
                                            </span>
                                        </label>
                                    </div>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <div
                    class="flex items-center text-right justify-end px-4 py-3 bg-white dark:bg-gray-700 sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="javascript:history.back()"
                        class="mr-3 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                        Retour
                    </a>
                    <button
                        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                        Sauvegarder
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-10 sm:mt-0 pt-10">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('settings.spaces.save.cas') }}" method="POST">
                @csrf
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">

                    <div class="w-full">
                        <div class="flex flex-wrap -mx-3 mb-6">

                        </div>
                    </div>
                </div>
                <div
                    class="flex items-center text-right justify-end px-4 py-3 bg-white dark:bg-gray-700 sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="javascript:history.back()"
                        class="mr-3 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                        Retour
                    </a>
                    <button
                        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                        Sauvegarder
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>

    </script>

</div>
@endsection
