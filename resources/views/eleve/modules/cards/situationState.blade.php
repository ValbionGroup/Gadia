@if ($situation != 0)
<div class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-500">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
            clip-rule="evenodd"></path>
    </svg>
</div>
<div>
    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
        Situation @if ($page_name == "Tableau de bord") Vie Scolaire @endif
    </p>
    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        Irrégulière
    </p>
</div>
@else
<div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
            clip-rule="evenodd"></path>
    </svg>
</div>
<div>
    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
        Situation @if ($page_name == "Tableau de bord") Vie Scolaire @endif
    </p>
    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        Régulière
    </p>
</div>
@endif
