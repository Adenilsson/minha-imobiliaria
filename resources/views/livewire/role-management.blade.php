<div>
    <form wire:submit.prevent="addRole">
        <input type="text" wire:model="name">
        <button type="submit">Add Role</button>
    </form>

    <ul>
        @foreach ($roles as $role)
            <li>{{ $role->name }}</li>
        @endforeach
    </ul>
</div>
