<x-layout>
        <x-slot:PageTitle>
            Login
        </x-slot:PageTitle>


<div class="d-flex justify-center align-items-center vh-100">

        <div class="container justify-content-center ">
            <form class="login_Form bg-dark rounded p-5" action="{{route('loginConfirm')}}" method="POST">

                {{-- <x-slot:formTitle class="fs-1 text-white">
                    Login Form
            </x-slot:formTitle> --}}
              @csrf
               <div class="form-group">
                 <label for="email" class="text-white" >Email</label>
                 <input type="email" name="email" id="email" class="form-control p-3 my-3 fs-4 @error('email') is-invalid @enderror" placeholder="Email">
                 @error('email')
                 <small class=" invalid-feedback "> {{ $message}}  </small>
                 @enderror
               </div>
               <div class="form-group">
                 <label for="passwrod" class="text-white" >Password</label>
                 <input type="password" name="password" id="password" class="form-control p-3 my-3 fs-4 @error('password') is-invalid @enderror" placeholder="password">
                 @error('password')
                 <small class=" invalid-feedback "> {{ $message}}  </small>
                 @enderror
               </div>
               <div class="form-group my-0 text-center">
                <button type="submit" class="btn fs-4 bg-white px-4">Login</button>
               </div>
              

            </form>

            @if(session('msg'))
            <x-alert  type="success" message="{{session('msg')}}"  dismissible/>
          @elseif(session('failed'))
          <x-alert  type="danger" message="{{session('failed')}}"  dismissible/>
          @endif
            
        </div>
    </div>


</x-layout>