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
                        Établissement
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                        Permet de modifier toutes les informations concernant l'établissement.
                    </p>
                </div>
                <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                        <p>
                            Vous pourrez modifier l'identité, les en-têtes/pieds de page, les logos, les signatures, le cachet, le calendrier, les mi-journées, la demi-pension, les récréations, les horaires de cours, le découpage des périodes et les sites.
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="{{ route('settings.etab') }}">
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
                        Généraux
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                        Réglages généraux de l'établissement.
                    </p>
                </div>
                <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                        <p>
                            Vous pourrez modifier les attestations, les autorisations de sortie, les avis du chef d'établissement, les disciplines, les documents à fournir, les filières, les matières d'équivalences, les mentions, les niveaux, les régimes, les alertes PPMS, les absences et les étiquettes de cours.
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="{{ route('settings.general') }}">
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
                        Absences et appels
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                        Gestion des absences, retards et de la liste d'appels.
                    </p>
                </div>
                <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                        <p>
                            Vous pourrez modifier les motifs d'absence et de retard, les rubriques de la feuille d'appel et les options.
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="{{ route('settings.absence') }}">
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
                        Sanctions
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                        Paramétrages des sanctions.
                    </p>
                </div>
                <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                        <p>
                            Vous pouvez gérer les motifs, les punitions disponibles et les sanctions disponibles.
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="{{ route('settings.punishment') }}">
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
                        Évaluation
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                        Gestion des évaluations.
                    </p>
                </div>
                <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                        <p>
                            Vous pourrez modifier les bilans périodiques, les domaines, le niveaux de maîtrise et les options les concernant.
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="{{ route('settings.evaluation') }}">
                        <button {{ $evaluation ? '' : 'disabled' }}
                        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                            {{ $evaluation ? 'Accèder' : 'Désactivé' }}
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
                        Projets d'accompagnement
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                        Gestion des projets d'accompagnement.
                    </p>
                </div>
                <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                        <p>
                            Vous pourrez modifier les types de projets et les motifs de projets.
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="{{ route('settings.accompanying') }}">
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
                        Infirmerie
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                        Gestion de l'infirmerie.
                    </p>
                </div>
                <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                        <p>
                            Vous pourrez modifier les actes médicaux, les issues d'intervention, les symptômes, les type d'intervention et les options de ce système.
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="{{ route('settings.infirmary') }}">
                        <button {{ $infirmary ? '' : 'disabled' }}
                        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                            {{ $infirmary ? 'Accèder' : 'Désactivé' }}
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
                        Options de Gadia
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                        Modifier les options générales de Gadia.
                    </p>
                </div>
                <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                        <p>
                            Vous pourrez modifier le système de connexion, les autorisations d'accès, les services d'authentification, les systèmes de sécurité, les fonctionnalités optionnelles, la licence, l'API et les modules.
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <a href="{{ route('settings.gadia') }}">
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

</div>
@endsection
