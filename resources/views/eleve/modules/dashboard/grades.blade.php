@if ($marks != null)
    @foreach ($marks as $mark)
        <div class="flex mt-6">
            <div class="w-10/12 mr-2">
                <span class="text-sm font-semibold block text-gray-600 dark:text-gray-400">{{ $mark['matiere'] }}</span>
                <span class="text-xs text-gray-500">{{ $mark['desc'] }}</span>
            </div>
            <div class="w-2/12">
                <span class="text-xl text-gray-800 dark:text-gray-200">{{ $mark['result']['note'] }}<span class="text-xs">/{{ $mark['result']['total'] }}</span></span>
            </div>
        </div>
    @endforeach
@else
<div class="justify-center text-center content-center dark:text-gray-300 text-gray-600">
    <div class="p-16">
        <svg class="w-10 h-10 m-auto block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
        <span class="font-light text-sm">Pas de note pour le moment</span>
    </div>
</div>
@endif
