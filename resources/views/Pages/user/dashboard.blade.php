<x-layout>

    <x-slot:PageTitle>
       dashboard
    </x-slot:PageTitle>


<h2>dashboard </h2>
    
<h3> user Name: {{ Auth::user()->name}}</h3>
<h3> user email: {{ Auth::user()->email}}</h3>


</x-layout>