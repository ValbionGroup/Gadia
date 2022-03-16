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
                @if ($errors->any())
                <div
                    class="p-2 mb-3 flex items-center justify-between text-sm font-semibold dark:text-red-100 dark:bg-red-600 text-red-600 bg-red-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>
                            Quelques erreurs sont survenues :
                            <ul class="list-disc list-inside text-sm dark:text-red-100 text-red-600">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </span>
                    </div>
                </div>
                @endif


                <div class="grid grid-cols-6 gap-6">
                    <!-- Token Name -->
                    <div class="col-span-6 sm:col-span-4">
                        <label class="block text-sm mb-2" for="tokenName">
                            <span
                                class="font-medium text-sm text-gray-700 dark:text-gray-400">Nom du jeton</span>
                            <input
                                class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-800 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="tokenName" id="tokenName" type="text" required>
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

                    <div class="flex items-center">
                        @if ($token["last_used_at"])
                        <div class="text-sm text-gray-600 dark:text-gray-500 tooltip" data-title="{{ date('d/m/Y \à H:i', strtotime($token["last_used_at"])) }}">
                            Dernière utilisation {{ $token["last_used_ago"] }}
                        </div>
                        @endif

                        <button class="cursor-pointer ml-6 text-sm text-red-500"
                            click="confirmApiTokenDeletion({{ $token["id"] }})">
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

<!-- Token Value Modal -->
<x-dialog-modal model="displayingToken">
    <x-slot name="title">
        {{ __('API Token') }}
    </x-slot>

    <x-slot name="content">
        <div>
            {{ __('Please copy your new API token. For your security, it won\'t be shown again.') }}
        </div>

        <input id="plaintextToken" type="text" readonly value="$plainTextToken"
            class="mt-4 bg-gray-100 px-4 py-2 rounded font-mono text-sm text-gray-500 w-full" autofocus autocomplete="off"
            autocorrect="off" autocapitalize="off" spellcheck="false"
            @showing-token-modal.window="setTimeout(() => $refs.plaintextToken.select(), 250)" />
    </x-slot>

    <x-slot name="footer">
        <button wire:click="$set('displayingToken', false)" wire:loading.attr="disabled">
            {{ __('Close') }}
        </button>
    </x-slot>
</x-dialog-modal>

<!-- Delete Token Confirmation Modal -->
<x-confirmation-modal model="confirmingApiTokenDeletion">
    <x-slot name="title">
        {{ __('Delete API Token') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Are you sure you would like to delete this API token?') }}
    </x-slot>

    <x-slot name="footer">
        <button wire:click="$toggle('confirmingApiTokenDeletion')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </button>

        <button class="ml-2" wire:click="deleteApiToken" wire:loading.attr="disabled">
            {{ __('Delete') }}
        </button>
    </x-slot>
</x-confirmation-modal>
