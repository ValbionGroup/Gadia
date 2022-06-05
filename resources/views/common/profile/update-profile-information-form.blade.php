<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                Informations sur le profil
            </h3>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-500">
                Mettez à jour les informations du profil et l'adresse électronique de votre compte.
            </p>
        </div>
        <div class="px-4 sm:px-0"></div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="" method="POST">
            @csrf
            <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">

                <x-auth-validation-errors />

                <x-session-error-success />

                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4">
                        <div class="col-span-6 sm:col-span-4 mb-2">
                            <label for="photo"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-400">Photo</label>
                            <div class="mt-2">
                                <img src="{{ 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->first_name . ' ' . Auth::user()->last_name).'&color=7E3AF2&background=EBF4FF'  }}"
                                    alt="{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}"
                                    class="rounded-full h-20 w-20 object-cover">
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <label class="block text-sm mb-2">
                                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Nom</span>
                                <x-input disabled type="text" name="name" value="{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}" autocomplete="name" />
                            </label>
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <label class="block text-sm mb-2">
                                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Adresse mail</span>
                                <x-input type="email" name="email" value="{{ Auth::user()->email }}" autocomplete="email" required />
                            </label>
                        </div>

                        @if ($tel != null)
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block text-sm mb-2">
                                <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Téléphone</span>
                                <x-input type="tel" name="tel" value="{{ $tel }}" autocomplete="tel" />
                            </label>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
            <div
                class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-700 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <button
                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                    Sauvegarder
                </button>
            </div>
        </form>
    </div>
</div>
