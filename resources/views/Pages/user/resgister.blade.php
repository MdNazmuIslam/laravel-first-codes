<x-layout>

    <x-slot:PageTitle>
        Resgister
    </x-slot:PageTitle>

    <div class="d-flex justify-center align-items-center vh-100">

        <div class="container justify-content-center ">

            <form class="register_Form bg-dark rounded p-5" action="{{route('resgistersave')}}" method="POST">
                @csrf
                {{-- <x-slot:formTitle class="text-white fs-1">
                   
            </x-slot:formTitle> --}}
            <h1 class="text-white text-center fw-blod"> Resgister Form</h1>


               <div class="form-group">
                 <label for="name" class="text-white" >Name</label>
                 <input type="text" name="name" id="name" class="form-control p-3 my-3 fs-4 @error('name') is-invalid @enderror" placeholder="Name">
                 @error('name')
                 <small class=" invalid-feedback "> {{ $message}}  </small>
                 @enderror
               </div>
               <div class="form-group">
                 <label for="email" class="text-white" >Email</label>
                 <input type="email" name="email" id="email" class="form-control p-3 my-3 fs-4 @error('email') is-invalid @enderror" placeholder="Email">
                 @error('email')
                 <small class=" invalid-feedback "> {{ $message}}  </small>
                 @enderror
               </div>
               <div class="form-group">
                 <label for="password" class="text-white" >Password</label>
                 <input type="password" name="password" id="password" class="form-control p-3 my-3 fs-4 @error('password') is-invalid @enderror" placeholder="Passwrod">
                 @error('password')
                 <small class=" invalid-feedback "> {{ $message}}  </small>
                 @enderror
               </div>
               <div class="form-group">
                 <label for="passwrod" class="text-white" >Confiram Password</label>
                 <input type="passwrod" name="confiram_passwrod" id="Confiram_passwrod" class="form-control p-3 my-3 fs-4 @error('confiram_passwrod') is-invalid @enderror" placeholder="Confiram Passwrod">
                 @error('confiram_passwrod')
                 <small class=" invalid-feedback "> {{ $message}}  </small>
                 @enderror
               </div>
               <div class="form-group my-0 text-center">
                <button type="submit" class="btn fs-4 bg-white px-4">Submit</button>
               </div>
           
            </form>
            @if(session('msg')){
              <x-alert  type="success" message="{{ session('status') }}"  dismissible/>
            }
           @endif
           
        </div>
    </div>



    
</x-layout>