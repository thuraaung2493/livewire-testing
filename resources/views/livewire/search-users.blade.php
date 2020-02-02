<div>
    <input wire:model="search" type="text" placeholder="Search users ...">

    <h1>Search Results:</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->email }}</li>
        @endforeach
    </ul>
</div>
