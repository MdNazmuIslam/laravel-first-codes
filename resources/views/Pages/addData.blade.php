    <x-layout>

        <x-slot:PageTitle>
            Add Data
        </x-slot:PageTitle>

<div class="contanier">
    <div class="row justify-content-center ">
       
        <div class="col-md-7 col-xl-4 mt-5">
            <h3>Add Student Data</h3>
            <form action="{{route('DataAdd')}}" method="POST" class="border border-dark boder-1 my-3 p-5 bg-info">
                @csrf
                <div class="my-3">
                    <input type="text" name="name" placeholder="name" class="form-control">
                </div>
                <div class="my-3">
                    <input type="text" name="class" placeholder="class" class="form-control" >
                </div>
                <div class="my-3">
                    <input type="text" name="subject" placeholder="subject" class="form-control">
                </div>
                <div class="my-3">
                    <input type="number" name="age" placeholder="age" class="form-control">
                </div>
                <button type="submit" class="btn-success">Add Data</button>
                <hr class="my-4">
                <a href="{{ route("crud")}}" class="btn btn-light">Back</a>
            </form> 
            
        </div>
    </div>
</div>

</x-layout>