<div>
 <h1 class="text-center">{{$active}}</h1>
{{--    <button class="border 1px solid blue text-cneter" wire:click="increment">+</button>--}}
{{--        <button class="border 1px solid blue text-cneter" wire:click="increment({{$count}})">+</button>--}}
{{--    <button class="border 1px solid blue text-cneter" wire:click="$set('count',10)">+</button>--}}
    <button class="border 1px solid blue text-cneter" wire:click="$toggle('active')">+</button>


    <button class="border 1px solid blue text-cneter " wire:click="decrement">-</button>


</div>
