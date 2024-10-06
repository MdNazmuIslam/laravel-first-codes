
<x-layout>

    <x-slot:PageTitle>
        Eq curd 
    </x-slot:PageTitle>

<div class="container">
    <div class="row justify-content-around">
        <div class="col-md-5">
            <div class="my-5">
                <h1 class="text-center py-3 bg-info text-white shadow">Eloquent CRUD</h1>
            </div>
        </div>
        <div class="col-12 col-lg-8">
            <h3>Student data </h3>
            <div class="my-4 text-end">
                <a href=" {{ route('EqCrud.create')}}">
                <button class="btn-info px-3 text-white fw-bold text-capitalize" type="button">Add data</button>
               </a>
            </div>
            <table class="table my-5 boder table-hover table-bordered table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th> age </th>
                        <th> update </th>
                        <th>delete</th>
                        <th>view</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach ( $student as $data => $sdata ) 
                       
                  
                   
                    <tr>
                       <td>{{$sdata->id }}</td> 
                       <td>{{$sdata->Name }}</td> 
                      <td>{{$sdata->class }}</td>
                        <td>{{$sdata->Subject }}</td>
                        <td>{{$sdata->age }}</td> 
                         
                        <td>
                            <a href="{{ route('EqCrud.edit',$sdata->id)}} ">
                            <button class="btn-success" type="button">update</button>
                        </a>
                        </td>
                        <td>
                            
                            <form action="{{ route('EqCrud.destroy',$sdata->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger" type="button">delete</button>
                        </form>
                            </td>
                        <td>
                            <a href="{{ route('EqCrud.show',$sdata->id)}}">
                                <button class="btn-primary" type="button">view</button>
                            </td>
                            </a>
                            
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <div class="my-5">
                {{ $student->links()}}
            </div>
           
             @if (session('msg'))
             <x-alert  type="success" message="{{ session('msg') }}"  dismissible/>
             @endif

        </div>
    </div>
</div>




</x-layout>