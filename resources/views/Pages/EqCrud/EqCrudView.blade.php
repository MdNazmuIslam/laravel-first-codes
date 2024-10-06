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
            <h3>Student data  View </h3>
           
            <table class="table my-5 boder table-hover table-bordered table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th> age </th>
                        <th> Back </th>
                      
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
                            <a href="{{ route('EqCrud.index')}}">
                                <button class="btn-primary" type="button">Back page</button>
                            </td>
                            </a>
                            
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            
        </div>
    </div>
</div>




</x-layout>