
<form {{$attributes->class(['form p-5'])}} action ="{{$action}}" method="{{$method == "POST" ? "GET":"POST"}}" >
 
@csrf
@unless (in_array($method,["GET","POST"]))
    @method($method);
@endunless

    @isset($formTitle)
    <h2 {{$formTitle->attributes->class(["fw-bold text-center"])}}>{{$formTitle}}</h2>
    @endisset

    @if($slot->isEmpty())
  <h1>Form data not found</h1>
    @else
    {{$slot}}
    @endif

   
</form>