<div class="bg-nwhite rounded-b-2xl">
    <p class="text-center pt-10 text-xl text-slate-400 font-semibold">
        @if ($search === '')
            -- No data found in database --
        @else
            -- No data found for "<span class="text-slate-600">{{ $search }}</span>" in database
            --
        @endif
    </p>
    <p class="text-center pb-6 text-sm text-slate-500 font-light">
        Try changing the filters or clear the search data.
        <button class="text-center py-3 text-sm text-blue-400 font-light cursor-pointer pb-4"
            wire:click='resetFilters()'>Reset Filter?</button>
    </p>
</div>
