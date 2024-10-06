    <x-layout>

        <x-slot:PageTitle>
            update Data
        </x-slot:PageTitle>

<div class="contanier">
    <div class="row justify-content-center ">
       
        <div class="col-md-7 col-xl-4 mt-5">
            <h3>update Student Data</h3>
            <form action="{{route('DataUpdate')}}" method="POST" class="border border-dark boder-1 my-3 p-5 bg-info">
                @csrf

                @foreach ( $student as $stdt => $studentdata )
                    
            

                <div class="">
                    <input type="text" name="id" placeholder="name" value="{{$studentdata->id}}" class="form-control d-none">
                </div>
                <div class="my-3">
                    <input type="text" name="name" placeholder="name" value="{{$studentdata->Name}}" class="form-control">
                </div>
                <div class="my-3">
                    <input type="text" value="{{$studentdata->class}}" name="class" placeholder="class" class="form-control" >
                </div>
                <div class="my-3">
                    <input type="text" value="{{$studentdata->Subject}}" name="subject" placeholder="subject" class="form-control">
                </div>
                <div class="my-3">
                    <input type="number" value="{{$studentdata->age}}" name="age" placeholder="age" class="form-control">
                </div>
                @endforeach
                <button type="submit" class="btn-success">Update Data</button>
                <a href="{{ route('crud')}}"><button class="btn-primary btn" type="button">Back Page</button> </a>
            </form> 
        </div>
    </div>
</div>

</x-layout>