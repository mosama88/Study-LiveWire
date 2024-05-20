<div>
    {{$parentComponent}}
    <hr>

    @foreach($myChildern as $key => $myChild)
{{--        @livewire('child-component',['ChildName'=>$myChild], key($myChild))--}}
        <livewire:child-component ChildName="{{$myChild}}" wire:key="{{$myChild}}">
    @endforeach
</div>
