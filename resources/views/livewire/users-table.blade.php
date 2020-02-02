<div>
    <div class="row mb-4">
        <div class="col form-inline">
            Per Page: &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
        </div>

        <div class="col">
            <input wire:model="search" class="form-control" type="text" placeholder="Search...">
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Name
                        @include('includes._sort-icon', ['field' => 'name'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('email')" role="button" href="#">
                        Email
                        @include('includes._sort-icon', ['field' => 'email' ])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                        Date
                        @include('includes._sort-icon', ['field' => 'created_at' ])
                    </a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col">
            {{ $users->links() }}
        </div>

        <div class="col text-right text-muted">
            Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} out of {{ $users->total() }} results
        </div>
    </div>
</div>
