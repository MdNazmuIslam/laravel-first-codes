<x-layout>

    <x-slot:PageTitle>
        view data
    </x-slot:PageTitle>

 <div class="container">
     <div class="row justify-content-around">
      
         <div class="col-12">
             <h3>View Student Data</h3>
            
             <table class="table my-5 boder table-hover table-bordered table-dark">
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>Name</th>
                         <th>class</th>
                         <th>Subject</th>
                         <th>age</th>
                         <th>Back </th>
                       
                     </tr>
                 </thead>
                 <tbody>
                    @foreach ( $student as $stdt => $studentdata )
                         
                    
                     <tr>
                         <td>{{$studentdata->id}} </td>
                         <td>{{$studentdata->Name}}</td>
                         <td>{{$studentdata->class}}</td>
                         <td>{{$studentdata->Subject}}</td>
                         <td>{{$studentdata->age}}</td>
                         <td><a href="{{ route('crud')}}"><button class="btn-primary btn" type="button">Back Page</button> </a></td>
                        
                             
                     </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
 </div>
 
 

</x-layout>