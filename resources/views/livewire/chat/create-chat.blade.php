<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
@foreach ($users as $user)
<ul class="list-group w-75 mx-auto mt-3 container-fluid ">
    <li class="list-group-item list-group-item-action" wire:click='checkconversation({{$user->id}})'>{{$user->name}}</li>
</ul>
@endforeach
</div>
