<div class="flex flex-row justify-between pt-2 px-2 bg-nwhite rounded-b-2xl mt-0.5">
    <select wire:model.live='perPage' class="@filterInput min-w-20">
        <option>10</option>
        <option>20</option>
        <option>50</option>
        <option>100</option>
    </select>
    <div class="w-full ml-3">
        {{ $items->links(data: ['scrollTo' => false]) }}

    </div>
    @if ($items->total() <= 9) <div
        class="w-11 h-10 border border-icon rounded-full bg-white justify-center text-center pt-2">
        <p>1</p>
</div>
@endif
</div>
