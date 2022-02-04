<form style="display: none;" class="tabcontent" id="cachet" action="{{ route('settings.etab.save.cachet') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-full">
        <div class="flex flex-wrap gap-4">
            <div class="w-full md:w-2/3 justify-center">
                <label class="font-medium text-sm text-gray-700 dark:text-gray-400">Envoyer le cachet</label>
                <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center border-gray-300 dark:border-gray-600">
                    <div class="h-full w-full text-center flex flex-col justify-center items-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg> -->
                        <div class="flex flex-auto max-h-48 mx-auto -mt-5">
                            <img style="height: 15em;" class="has-mask object-center"
                                src="https://i.pinimg.com/originals/d9/9e/15/d99e156ba0b07feefbabef871eda0f23.png">
                        </div>
                        <p class="pointer-none text-gray-500 dark:text-gray-300"><span class="line-through text-gray-300 dark:text-gray-600">Glissez et déposez une image ici</span>
                            <br />ou <span class="text-purple-500 dark:text-purple-400 hover:underline">selectionnez-la</span> depuis votre ordinateur</p>
                    </div>
                    <input type="file" name="cachet" class="hidden" accept="image/png, image/jpeg, image/gif">
                </label>
                <label class="font-light text-xs text-gray-700 dark:text-gray-400">Format : 320x320 (ou proportionnel)</label>
            </div>
            <div class="justify-center">
                <label class="font-medium text-sm text-gray-700 dark:text-gray-400">Cachet présent actuellement</label>
                <div class="flex flex-col justify-center items-center">
                    @if ($cachet != null)
                        <img class="object-center mt-1 rounded-lg h-80" width="320" src="{{ asset('assets/img/signature/'.$cachet) }}">
                    @else
                        <p class="text-center text-gray-500 dark:text-gray-300">Aucun cachet importé</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
