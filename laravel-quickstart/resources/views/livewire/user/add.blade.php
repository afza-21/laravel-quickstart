{{-- <form wire:submit.prevent="save">
       
        <flux:modal name="edit-profile" class="md:w-96">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Update profile</flux:heading>
                    <flux:text class="mt-2">Make changes to your personal details.</flux:text>
                </div>

                <flux:input label="Name" placeholder="Your name" />

                <flux:input label="Date of birth" type="date" />

                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary">Save changes</flux:button>
                </div>
            </div>
        </flux:modal>
    </form> --}}
<div class="p-2">
    <form action="" wire:submit.prevent="save" class="space-y-4 space-x-4">
        <div>
            <flux:label>Username</flux:label>
            <flux:input wire:model="name" />
            {{-- <flux:error name="name" /> --}}
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <flux:label>Email</flux:label>
            <flux:input wire:model="email" />
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

        </div>
        <div>
            <flux:label>Password</flux:label>
            <flux:input wire:model="password" type="password" />
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

        </div>
        @permission('users-create')
            <flux:button variant="primary" color="violet" type="submit">Add User</flux:button>
        @endpermission
        <flux:button variant="primary" color="red" type="button" wire:click="cancel">Cancel</flux:button>
    </form>

</div>
