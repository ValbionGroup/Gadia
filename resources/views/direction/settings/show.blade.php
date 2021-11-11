@extends('direction.modules.layouts')

@section('title')
Gestion des paramètres de Gadia
@endsection

@section('content')
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1 flex justify-between">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                        Règlages globaux
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                        Changer les paramètres généraux de Gadia.
                    </p>
                </div>
                <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                        <p>
                            Vous pourrez modifier :
                            <ul class="list-disc list-inside text-sm">
                                <li>Le nom de l'établissement</li>
                                <li>La license</li>
                                <li>Les coordonnées de l'établissement</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="{{ route('settings.global') }}">
                        <button
                        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                            Accèder
                        </button>
                    </a>
                </div>
                </form>
            </div>
        </div>

    </div>

    <div class="hidden sm:block">
        <div class="py-8">
            <div class="border-t border-gray-200 dark:border-gray-800"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1 flex justify-between">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                        Gestion des espaces et des connexions
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                        Modifier les espaces implémentés sur Gadia.
                    </p>
                </div>
                <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                        <p>
                            Vous pourrez modifier :
                            <ul class="list-disc list-inside text-sm">
                                <li>Le système de connexion</li>
                                <li>L'autorisation d'accès</li>
                                <li>Les services d'authentification</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="{{ route('settings.spaces') }}">
                        <button
                        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                            Accèder
                        </button>
                    </a>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:block">
        <div class="py-8">
            <div class="border-t border-gray-200 dark:border-gray-800"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        {{-- @include('common.profile.two-factor-authentication-form') --}}
    </div>

    <div class="hidden sm:block">
        <div class="py-8">
            <div class="border-t border-gray-200 dark:border-gray-800"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        {{-- @include('common.profile.logout-other-sessions-form') --}}
    </div>

    <div class="hidden sm:block">
        <div class="py-8">
            <div class="border-t border-gray-200 dark:border-gray-800"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        {{-- @include('common.profile.api-token-manager') --}}
    </div>

</div>
@endsection
