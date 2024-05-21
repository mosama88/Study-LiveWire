
{{--wire:model.defer="email"--}}
<form action="" class="m-auto my-4 w-50" wire:submit.prevent="submit" autocomplete="off">
@error('email')
<div class="alert text-danger" role="alert">
    {{$message}}
</div>
@enderror

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="text" class="form-control" wire:model="email" placeholder="name@example.com" >
             @error('email')
        <div class="alert text-danger" role="alert">
            {{$message}}
        </div>
            @enderror
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <input type="password" class="form-control" wire:model="password" >

        @error('password')
        <div class="alert text-danger" role="alert">
            {{$message}}
    </div>
        @enderror


    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" wire:mode.defer="remember">
        <label class="form-check-label" for="flexCheckDefault">
            Remember
        </label>
    </div>


    <div class="col-auto">
        <button type="submit" class="btn btn-outline-primary mb-3">Confirm identity</button>
    </div>
</form>
