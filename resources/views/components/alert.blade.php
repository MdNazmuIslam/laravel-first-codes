<div  {{$attributes->class(['alert-dismissible fade show text-center' => $dismissible])->merge(['class'=>'alert alert-'.$type])}} role="alert">
{{$message}}

@if ($dismissible)
    <buton button="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></buton>
@endif

</div>