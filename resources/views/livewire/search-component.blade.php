<div class="w-50 my-4">
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Search</label>
        <input type="search" class="form-control" wire:model='search' placeholder="Search By Name">
    </div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->name }}</td>
            </tr>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>



{{-- php artisan tinker --}}

{{-- App\Models\Post::Factory()->count(20)->create() --}}
