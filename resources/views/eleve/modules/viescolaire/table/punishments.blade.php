@if ($punishments != null)
@foreach ($punishments as $punishment)
<tr class="text-gray-700 dark:text-gray-400">
    <td class="px-4 py-3">
        <div class="flex items-center text-sm">
            @switch($punishment["type"])
                @case(1)
                    <span
                        class="px-2 py-1 font-medium text-sm leading-tight text-orange-700 bg-orange-100 rounded-full dark:bg-orange-700 dark:text-orange-100">
                        Retenue
                    </span>
                    @break
                @case(2)
                    <span
                        class="px-2 py-1 font-medium text-sm leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                        T.I.G.
                    </span>
                    @break
                @case(3)
                    <span
                        class="px-2 py-1 font-medium text-sm leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        Devoir
                    </span>
                    @break
            @endswitch
        </div>
    </td>
    <td class="px-4 py-3">
        <div class="flex items-center text-sm">
            <div>
                <p class="font-semibold">{{ $punishment['date'] }} {{ $punishment['lenght'] }}</p>
            </div>
        </div>
    </td>
    <td class="px-4 py-3 text-sm">{{ $punishment['demand']['when'] }}</td>
    <td class="px-4 py-3 text-sm">{{ $punishment['demand']['who'] }}</td>
    <td class="px-4 py-3 text-sm">{{ $punishment['reason']['sys'] }}</td>
    <td class="px-4 py-3 text-sm">{{ $punishment['reason']['explain'] }}</td>
    <td class="px-4 py-3 text-sm">{{ $punishment['work'] }}</td>
</tr>
@endforeach
@else
<tr class="text-gray-700 dark:text-gray-400">
    <td class="px-4 py-3 text-center" colspan="7">
        Aucune punition n'a été enregistré. Continue comme ça 👍
    </td>
</tr>
@endif
