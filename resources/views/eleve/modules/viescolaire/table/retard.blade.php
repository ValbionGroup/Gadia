@if ($retard_count != 0)
@foreach ($retards as $retard)
<tr class="text-gray-700 dark:text-gray-400">
    <td class="px-4 py-3">
        <div class="flex items-center text-sm">
            <div>
                <p class="font-semibold">{{ $retard["date"] }}</p>
            </div>
        </div>
    </td>
    <td class="px-4 py-3 text-sm">
        {{ $retard["missed"] }}
    </td>
    <td class="px-4 py-3 text-sm">
        {{ $retard["reason"]["text"] }}
        @if ($retard["reason"]["acceptable"] == false)
        <span
            class="px-2 py-1 text-xs font-medium leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700 tooltip"
            data-title="Cette entrée n'est visible que par l'infirmière et la vie scolaire. Elle n'apparait donc pas sur l'espace parent."
            data-placement="right">
            Non recevable
        </span>
        @endif
        @if ($retard["reason"]["hide"] == true)
            <span
                class="px-2 py-1 text-xs font-medium leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700 tooltip"
                data-title="Cette entrée n'est visible que par l'infirmière et la vie scolaire. Elle n'apparait donc pas sur l'espace parent."
                data-placement="right">
                Confidentiel
            </span>
        @endif
    </td>
    <td class="px-4 py-3 text-sm">
        @if ($retard["justified"] == 0)
            <span
                class="px-2 py-1 font-medium leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                Non justifiée
            </span>
        @else
            <span
                class="px-2 py-1 font-medium leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                Justifiée
            </span>
        @endif
    </td>
    <td>
        @if ($retard["ra"] == 1)
            <span class="text-blue-500 dark:text-blue-600 tooltip" data-title="Réglé administrativement"
                data-placement="top">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"></path>
                </svg>
            </span>
        @endif
    </td>
</tr>
@endforeach
@else
<tr class="text-gray-700 dark:text-gray-400">
    <td class="px-4 py-3 text-center" colspan="5">
        Aucun retard n'a été enregistré. Continue comme ça 👍
    </td>
</tr>
@endif
