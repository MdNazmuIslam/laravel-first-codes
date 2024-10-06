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
            <h3>Student data add  </h3>
            
            <div class="form">
             
                   
              
                <form action="{{route('EqCrud.store')}}" method="POST">
                  @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group my-3">
                                <label for="Name">Name</label>
                                <input type="text"  name="Name" id="Name" class="form-control py-3 fs-4" placeholder="Name" aria-describedby="Name">
                                
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group my-3">
                                <label for="Class">Class</label>
                                <input type="number"  name="Class" id="Class" class="form-control py-3 fs-4" placeholder="Class" aria-describedby="Class">
                                
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group my-3">
                                <label for="Subject">Subject</label>
                                <input type="text"  name="Subject" id="Subject" class="form-control py-3 fs-4" placeholder="Subject" aria-describedby="Subject">
                               
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group my-3">
                                <label for="age">age</label>
                                <input type="number"   name="age" id="age" class="form-control py-3 fs-4" placeholder="age" aria-describedby="age">
                               
                              </div>
                        </div>
                    </div>

                   <div class="text-center my-5">
                    <button type="submit" class=" btn-info py-2 px-5 fs-3 rounded text-white">Submit</button>
                   </div>
                </form>
            
            </div>
           
            
            
        </div>
    </div>
</div>




</x-layout>