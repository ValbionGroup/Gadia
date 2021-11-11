@if ($cdt != null)
    @foreach ($cdt as $travail)
        <div class="flex mt-2">
            <div class="w-11/12 mr-4">
                <span class="text-sm font-semibold block text-gray-600 dark:text-gray-400">{{ $travail['matiere'] }}</span>
                <span class="text-xs text-gray-500">{{ $travail['desc'] }}</span>
            </div>
            <div class="w-1/12">
                <input type="checkbox" <?php if ($travail['fait']) {
    echo 'checked';
} ?>
                    class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
            </div>
        </div>
    @endforeach
@else
<div class="justify-center text-center content-center dark:text-gray-300 text-gray-600">
    <div class="p-16">
        <svg class="w-10 h-10 m-auto block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path></svg>
        <span class="font-semibold">Parfait !</span><br/>
        <span class="font-light text-sm">Aucun devoir à faire pour demain</span>
    </div>
</div>
@endif
