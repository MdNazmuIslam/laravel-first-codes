@props([
    'action',
    'method' => 'POST',
])

<div class="container">
    <form action="{{$action}}" method="{{ $method == 'GET' ? 'GET' : 'POST'}}">
        @csrf
    
        @unless ( in_array($method,['GET','POST']))
            @method($method )
        @endunless
    
       {{ $slot}}
    </form>
</div>


