<div class="md:grid md:grid-cols-3 md:gap-6" id="tokens">

    <!-- Generate API Token -->
    <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Créer un jeton d'API</h3>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                Les jetons d'API permettent aux services tiers de s'authentifier auprès de notre application en votre nom.
            </p>
        </div>
        <div class="px-4 sm:px-0"> </div>
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ route('api-tokens.store') }}">
            @csrf
            <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">

                <x-auth-validation-errors />


                <div class="grid grid-cols-6 gap-6">
                    <!-- Token Name -->
                    <div class="col-span-6 sm:col-span-4">
                        <label class="block text-sm mb-2" for="tokenName">
                            <span
                                class="font-medium text-sm text-gray-700 dark:text-gray-400">Nom du jeton</span>
                            <x-input name="tokenName" id="tokenName" type="text" required />
                        </label>
                    </div>
                </div>
            </div>


            <div
                class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                    Créer
                </button>
            </div>
        </form>
    </div>

</div>


@if (!$tokens["tokens"]->isEmpty())
<div class="hidden sm:block">
    <div class="py-8">
        <div class="border-t border-gray-200 dark:border-gray-800"></div>
    </div>
</div>

<div class="md:grid md:grid-cols-3 md:gap-6">
    <!-- Manage API Tokens -->
    <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                Gérer les jetons d'API
            </h3>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                Vous pouvez supprimer tous vos jetons existants s'ils ne sont plus nécessaires.
            </p>
        </div>
        <div class="px-4 sm:px-0"> </div>
    </div>

    <!-- API Token List -->
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-md">
            <div class="space-y-6">
                @foreach ($tokens["tokens"]->sortBy('name') as $token)
                <div class="flex items-center justify-between">
                    <div class="text-gray-900 dark:text-gray-200 font-bold">
                        {{ $token["name"] }}
                    </div>

                    <div class="items-center flex">
                        @if ($token["last_used_at"])
                        <div class="hidden sm:block text-sm text-gray-600 dark:text-gray-500 tooltip" data-title="{{ date('d/m/Y \à H:i', strtotime($token["last_used_at"])) }}">
                            Dernière utilisation {{ $token["last_used_ago"] }}
                        </div>
                        @endif

                        <button class="cursor-pointer ml-6 text-sm text-red-500"
                            click="confirmApiTokenDeletion({{ $token["id"] }})" @click="displayingToken = true">
                            Supprimer
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endif

<x-dialog-modal model="displayingToken">
    <x-slot name="title">
        Jeton d'API
    </x-slot>

    <x-slot name="content">
        <div>
            Veuillez copier votre nouveau jeton API. Pour votre sécurité, il ne sera plus affiché.
        </div>

        <x-input disabled id="plaintextToken" type="text" readonly value="$plainTextToken" autofocus autocomplete="off"
            autocorrect="off" autocapitalize="off" spellcheck="false"
            @showing-token-modal.window="setTimeout(() => $refs.plaintextToken.select(), 250)" />
    </x-slot>

    <x-slot name="footer">
        <button @click="$set('displayingToken', false)" loading.attr="disabled">
            Fermer
        </button>
    </x-slot>
</x-dialog-modal>

<x-confirmation-modal model="confirmingApiTokenDeletion">
    <x-slot name="title">
        Supprimer un jeton d'API
    </x-slot>

    <x-slot name="content">
        Êtes-vous sûr de vouloir supprimer ce jeton d'API ?
    </x-slot>

    <x-slot name="footer">
        <button wire:click="$toggle('confirmingApiTokenDeletion')" wire:loading.attr="disabled">
            Annuler
        </button>

        <button class="ml-2" wire:click="deleteApiToken" wire:loading.attr="disabled">
            Supprimer
        </button>
    </x-slot>
</x-confirmation-modal>
