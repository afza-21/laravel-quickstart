<div>
    <div class="flex flex-row mb-2 w-full justify-between">
        <div class="flex flex-col">
            <flux:heading size="xl" level="1" class="pl-1">
                <span class="inline-flex items-center gap-2">
                    USERS
                </span>
            </flux:heading>
            <x-az-add-button />
        </div>

        <flux:dropdown class="flex flex-row gap-2">
            <flux:button icon:trailing="chevron-down" icon:leading="arrow-down-tray">Download</flux:button>
            <flux:menu class="p-2">
                <flux:menu.item icon="table-cells" wire:click="export">Export (XLSX)
                </flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </div>
    <div
        class="flex flex-row justify-between w-full h-auto p-3 gap-3 bg-nwhite rounded-xl bg-zinc-50 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700">
    </div>
    <div
        class="mt-5 overflow-hidden  bg-zinc-50 dark:bg-zinc-900 rounded-2xl border border-zinc-200 dark:border-zinc-700">
        @if (count($items) != 0)

            <table class="@table">
                <thead class="@thead">
                    <tr class="@trow">
                        <x-az-table-head head='#' />
                        @include('livewire.includes.table-sortable', [
                            'name' => 'name',
                            'displayName' => 'Name',
                        ])

                        @include('livewire.includes.table-sortable', [
                            'name' => 'email',
                            'displayName' => 'Email',
                        ])

                        @include('livewire.includes.table-sortable', [
                            'name' => 'created_at',
                            'displayName' => 'Joined On',
                        ])
                        {{-- <x-az-table-head head='Actions' /> --}}
                    </tr>
                </thead>

                <tbody class="@tbody ">
                    @foreach ($items as $key => $item)
                        <tr wire:key="{{ $item->id }}" class="@trow hover:bg-gray-200">
                            <x-az-data>
                                <div class="ml-2.5 py-1 ">
                                    {{ ($items->currentpage() - 1) * $items->perpage() + $loop->index + 1 }}
                                </div>
                            </x-az-data>
                            <x-az-data> {{ $item->name ?? '-' }} </x-az-data>
                            <x-az-data> {{ $item->email ?? '-' }} </x-az-data>
                            <x-az-data>{{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }} </x-az-data>
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <x-az-search-null search="{{ $search }}"></x-az-search-null>
        @endif
        @if (count($items) != 0)
            @include('livewire.includes.table-count')
        @endif
    </div>
</div>
