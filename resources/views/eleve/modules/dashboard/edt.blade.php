@if ($edt != null)
    @foreach ($edt as $matiere)
        @if ($matiere['name'] != null)
            <div class="flex mb-2">
                <div class="w-2/12">
                    <span class="text-sm text-gray-400 dark:text-gray-600 block">{{ $matiere['time']['start'] }}</span>
                    <span class="text-sm text-gray-400 dark:text-gray-600 block">{{ $matiere['time']['end'] }}</span>
                </div>
                <div class="w-1/12">
                    <span class="h-2 w-3 rounded-full block mt-2" style="background-color: #{{ $matiere['color'] }};"></span>
                </div>
                <div class="w-9/12">
                    <span class="text-sm font-semibold block text-gray-600 dark:text-gray-400">{{ $matiere['name'] }}</span>
                    <span class="text-sm text-gray-700 dark:text-gray-500">Salle {{ $matiere['room'] }}</span>
                </div>
            </div>
        @else
            <!-- Nothing -->
            <div class="flex mb-4">
                <div class="w-2/12">

                </div>
                <div class="w-1/12">
                    <span class="ml-1 bg-gray-300 dark:bg-gray-600 h-6 w-1 rounded-full block mt-2"></span>
                </div>
                <div class="w-9/12">
                </div>
            </div>
        @endif
    @endforeach
@else
    <div class="justify-center text-center content-center dark:text-gray-300 text-gray-600">
        <div class="p-16">
            <svg class="w-10 h-10 m-auto block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <span class="font-semibold">Journée détente</span><br/>
            <span class="font-light text-sm">Aucun cours de prévu</span>
        </div>
    </div>
@endif
