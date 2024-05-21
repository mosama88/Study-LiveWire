
<form action="" class="m-auto my-4 w-50" wire:submit.prevent="submit" autocomplete="off" enctype="multipart/form-data">
    @if(session('success')!=null)
        <div class="alert alert-success text-center">
            {{session('success')}}
        </div>
    @endif

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Upload File</label>
        <input type="file" class="form-control" wire:model="photo" />
        @error('photo')
        <div class="alert text-danger" role="alert">
            {{$message}}
        @enderror
        </div>

        <div class="spinner-border text-primary" role="status" wire:loading wire:target="photo">
   <span class="visually-hidden">Loading...</span>{{--          loding states--}}
        </div>

        <div class="mb-3 my-3">
            @if ($photo)
                Photo Preview:
                <img src="{{ $photo->temporaryUrl() }}">
            @endif
        </div>


        <button wire:click="export">
            Download File
        </button>

            <div class="mb-3 my-3">
                <button type="submit" class="btn btn-outline-primary mb-3">Confirm identity</button>
            </div>
</form>
