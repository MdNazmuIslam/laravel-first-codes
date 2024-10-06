 <x-layout>

    <x-slot:PageTitle>
        Home 
    </x-slot:PageTitle>

    
<div class="mt-5">hello</div>

<x-alert type="success" message="this a succes alert box" class="m-4 mt-5 " />
<x-alert  type="danger" message="this a danger alert box" id="alerbox"/>
<x-alert  type="danger" message="this a danger alert box"  dismissible/>
<x-alert />

<x-form class="bg-dark" method="POST" action="somepage" >
    <x-slot:formTitle>
        Contact Form
    </x-slot:formTitle>
<input type="text" name="name" class="form-control my-3" id="" placeholder="Name">
<input type="email" name="name" class="form-control my-3" id="" placeholder="Email">
<button type="submit">submit</button>
</x-form>

<x-dataform action='/somepage' >
    <input type="text" name="name">
    <button type="submit">Save</button>

</x-dataform>




</x-layout>