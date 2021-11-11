<?php $page_name = "Compte & paramètres"; ?>
@include('common.profile.modules.top')

<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid" id="info">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Compte & paramètres
        </h2>

        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                @include('common.profile.update-profile-information-form')
            </div>

            <div class="hidden sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200 dark:border-gray-800" id="password"></div>
                </div>
            </div>

            <div class="mt-10 sm:mt-0">
                @include('common.profile.update-password-form')
            </div>

            <div class="hidden sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200 dark:border-gray-800" id="mfa"></div>
                </div>
            </div>

            <div class="mt-10 sm:mt-0">
                @include('common.profile.two-factor-authentication-form')
            </div>

            <div class="hidden sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200 dark:border-gray-800" id="sessions"></div>
                </div>
            </div>

            <div class="mt-10 sm:mt-0">
                @include('common.profile.logout-other-sessions-form')
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

    </div>
</main>

@include('layouts.footer')
