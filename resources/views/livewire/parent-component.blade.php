<div>
<<<<<<< HEAD
    {{-- The whole world belongs to you. --}}
=======
    {{$parentComponent}}
    <hr>

    @foreach($myChildern as $key => $myChild)
{{--        @livewire('child-component',['ChildName'=>$myChild], key($myChild))--}}
        <livewire:child-component ChildName="{{$myChild}}" wire:key="{{$myChild}}">
    @endforeach
>>>>>>> 19a5cd81da9f4648ab9195cb9ecb078b24dbb2a8
</div>
