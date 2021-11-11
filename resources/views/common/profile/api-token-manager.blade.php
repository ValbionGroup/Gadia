<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

    <!-- Generate API Token -->
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1 flex justify-between">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium text-gray-900">{{ __('Create API Token') }}</h3>
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('API tokens allow third-party services to authenticate with our application on your behalf.') }}
                </p>
            </div>
            <div class="px-4 sm:px-0"> </div>
        </div>

        <div class="mt-5 md:mt-0 md:col-span-2">
            <form submit.prevent="createApiToken">
                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="grid grid-cols-6 gap-6">
                        <!-- Token Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700"
                                for="name">{{ __('Token Name') }}</label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="name" type="text" wire:model.defer="createApiTokenForm.name" autofocus="autofocus">
                            <x-input-error for="name" class="mt-2" />
                        </div>
                    </div>
                </div>


                <div
                    class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('Create') }}
                    </button>
                </div>
            </form>
        </div>

        @if ($this->user->tokens->isNotEmpty())
        <div class="hidden sm:block">
            <div class="py-8">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <!-- Manage API Tokens -->
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">
                            {{ __('Manage API Tokens') }}
                        </h3>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('You may delete any of your existing tokens if they are no longer needed.') }}
                        </p>
                    </div>
                </div>

                <div class="px-4 sm:px-0"> </div>

                <!-- API Token List -->
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                        <div class="space-y-6">
                            @foreach ($this->user->tokens->sortBy('name') as $token)
                            <div class="flex items-center justify-between">
                                <div>
                                    {{ $token->name }}
                                </div>

                                <div class="flex items-center">
                                    @if ($token->last_used_at)
                                    <div class="text-sm text-gray-400">
                                        {{ __('Last used') }} {{ $token->last_used_at->diffForHumans() }}
                                    </div>
                                    @endif

                                    <button class="cursor-pointer ml-6 text-sm text-gray-400 underline"
                                        click="manageApiTokenPermissions({{ $token->id }})">
                                            {{ __('Permissions') }}
                                    </button>

                                        <button class="cursor-pointer ml-6 text-sm text-red-500"
                                            click="confirmApiTokenDeletion({{ $token->id }})">
                                            {{ __('Delete') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif

                    <!-- Token Value Modal -->
                    <x-dialog-modal wire:model="displayingToken">
                        <x-slot name="title">
                            {{ __('API Token') }}
                        </x-slot>

                        <x-slot name="content">
                            <div>
                                {{ __('Please copy your new API token. For your security, it won\'t be shown again.') }}
                            </div>

                            <x-input x-ref="plaintextToken" type="text" readonly :value="$plainTextToken"
                                class="mt-4 bg-gray-100 px-4 py-2 rounded font-mono text-sm text-gray-500 w-full"
                                autofocus autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"
                                @showing-token-modal.window="setTimeout(() => $refs.plaintextToken.select(), 250)" />
                        </x-slot>

                        <x-slot name="footer">
                            <x-secondary-button wire:click="$set('displayingToken', false)"
                                wire:loading.attr="disabled">
                                {{ __('Close') }}
                            </x-secondary-button>
                        </x-slot>
                    </x-dialog-modal>

                    <!-- API Token Permissions Modal -->
                    <x-dialog-modal wire:model="managingApiTokenPermissions">
                        <x-slot name="title">
                            {{ __('API Token Permissions') }}
                        </x-slot>

                        <x-slot name="content">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label class="flex items-center">
                                    <x-checkbox wire:model.defer="updateApiTokenForm.permissions" :value="" />
                                    <span class="ml-2 text-sm text-gray-600">$permission</span>
                                </label>
                            </div>
                        </x-slot>

                        <x-slot name="footer">
                            <x-secondary-button wire:click="$set('managingApiTokenPermissions', false)"
                                wire:loading.attr="disabled">
                                {{ __('Cancel') }}
                            </x-secondary-button>

                            <x-button class="ml-2" wire:click="updateApiToken" wire:loading.attr="disabled">
                                {{ __('Save') }}
                            </x-button>
                        </x-slot>
                    </x-dialog-modal>

                    <!-- Delete Token Confirmation Modal -->
                    <x-confirmation-modal wire:model="confirmingApiTokenDeletion">
                        <x-slot name="title">
                            {{ __('Delete API Token') }}
                        </x-slot>

                        <x-slot name="content">
                            {{ __('Are you sure you would like to delete this API token?') }}
                        </x-slot>

                        <x-slot name="footer">
                            <x-secondary-button wire:click="$toggle('confirmingApiTokenDeletion')"
                                wire:loading.attr="disabled">
                                {{ __('Cancel') }}
                            </x-secondary-button>

                            <x-danger-button class="ml-2" wire:click="deleteApiToken" wire:loading.attr="disabled">
                                {{ __('Delete') }}
                            </x-danger-button>
                        </x-slot>
                    </x-confirmation-modal>
                </div>
