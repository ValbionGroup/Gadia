<form style="display: none;" class="tabcontent" id="sign" action="{{ route('settings.etab.save.signatures') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-full">
        <div class="flex flex-wrap gap-4">
            <div class="w-full md:w-1/3 justify-center">
                <label class="font-medium text-sm text-gray-700 dark:text-gray-400">Envoyer une/des signature(s)</label>
                <label
                    class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center border-gray-300 dark:border-gray-600">
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
                        <p class="pointer-none text-gray-500 dark:text-gray-300"><span
                                class="text-purple-500 dark:text-purple-400 hover:underline">Selectionnez-les</span>
                            depuis votre ordinateur</p>
                    </div>
                    <input type="file" name="signs" class="hidden" multiple accept="image/png, image/jpeg, image/gif">
                </label>
                <label class="font-light text-xs text-gray-700 dark:text-gray-400">Format : 252x84 (ou proportionnel)</label>
            </div>
            <div class="w-full md:w-1/3 justify-center">
                <label class="font-medium text-sm text-gray-700 dark:text-gray-400">Signatures présentes
                    actuellement</label>
                <div class="flex flex-col rounded-md">
                    <table class="w-full border border-none bg-gray-200 dark:bg-gray-600 rounded-md">
                        <tbody class="text-gray-700 dark:text-gray-200 divide-y divide-gray-300 dark:divide-gray-500">
                            @if (count($signatures) > 0)
                                @foreach ($signatures as $signature)
                                <tr>
                                    <td class="inline-flex items-center justify-between w-full pl-2" id="{{ $signature->id }}" onclick="displaySign(event, '{{ $signature->location }}')">
                                        <span class="inline-flex items-center">{{ $signature->name }}</span>
                                        <div class="flex items-center">
                                            <a href="#" class="mr-2 tooltip" data-title="Modifier le nom">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </a>
                                            <a href="{{ route('settings.etab.delete.signature', ['id' => $signature->id]) }}" class="mr-2 tooltip" data-title="Supprimer">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tàr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center text-gray-500 dark:text-gray-300">Aucune signature
                                        présente actuellement</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="justify-center">
                <label class="font-medium text-sm text-gray-700 dark:text-gray-400">Prévisualisation</label>
                <div class="flex flex-col justify-center items-center">
                    @if (count($signatures) > 0)
                        <img class="object-center mt-1 rounded-lg h-24 border dark:border-gray-600 border-gray-200" id="img" width="350" src="{{ asset('img/signature/'.$signatures[0]->location) }}">
                    @else
                        <p class="text-center text-gray-500 dark:text-gray-300">Aucune prévisualisation</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    function displaySign(evt, location) {
        var img = document.getElementById("img");

        img.src = "{{ asset('img/signature/') }}/" + location;
    }
</script>
