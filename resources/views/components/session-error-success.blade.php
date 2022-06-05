@if (session('error'))
<div
    class="p-2 mb-3 flex items-center justify-between text-sm font-semibold dark:text-red-100 dark:bg-red-600 text-red-600 bg-red-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red">
    <div class="flex items-center">
        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                clip-rule="evenodd"></path>
        </svg>
        <span>{{ session('error') }}</span>
    </div>
</div>
@endif

@if (session('success'))
<div
    class="p-2 mb-3 flex items-center justify-between text-sm font-semibold dark:text-green-100 dark:bg-green-600 text-green-600 bg-green-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-green">
    <div class="flex items-center">
        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd"></path>
        </svg>
        <span>{{ session('success') }}</span>
    </div>
</div>
@endif
