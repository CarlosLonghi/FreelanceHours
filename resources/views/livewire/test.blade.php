<div>
    <h2>Meu componente livewire</h2>

    <input wire:model.live="search" type="text">

    <br>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
