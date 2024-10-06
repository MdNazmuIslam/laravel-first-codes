<x-layout>

    <x-slot:PageTitle>
        crud 
    </x-slot:PageTitle>


<div class="container">
    <div class="row justify-content-around">
        <div class="col-md-5">
            <div class="my-5">
                <h1 class="text-center py-3 bg-info text-white shadow">Laravel Query</h1>
            </div>
        </div>
        <div class="col-12 col-lg-8">
            <h3>Student Data</h3>
            <div class="my-4 text-end">
                <a href=" {{ route('addData')}}">
                <button class="btn-info px-3 text-white fw-bold text-capitalize" type="button">Add data</button>
               </a>
            </div>
            <table class="table my-5 boder table-hover table-bordered table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>class</th>
                        <th>Subject</th>
                        <th>age</th>
                        <th> update </th>
                        <th>delete</th>
                        <th>view</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $student as $sdata =>$studentdata )
                        
                   
                    <tr>
                        <td>{{$studentdata->id}} </td>
                        <td>{{$studentdata->Name}}</td>
                        <td>{{$studentdata->class}}</td>
                        <td>{{$studentdata->Subject}}</td>
                        <td>{{$studentdata->age}}</td>
                       
                        <td>
                            <a href=" {{ route('updateData',$studentdata->id)}}">
                            <button class="btn-success" type="button">update</button>
                        </a>
                        </td>
                        <td>
                            <a href="{{ route('deleteData',$studentdata->id)}}">
                                <button class="btn-danger" type="button">delete</button>
                            </a>
                           
                            </td>
                        <td>
                            <a href="{{ route('viewData',$studentdata->id)}}">
                                <button class="btn-primary" type="button">view</button>
                            </td>
                            </a>
                            
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
            <div class="my-4">
                {{ $student->links()}}
            </div>
        </div>

        @if (session('msg'))
            <x-alert  type="success" message="{{ session('msg') }}"  dismissible/>
            @endif
    </div>
</div>




</x-layout>