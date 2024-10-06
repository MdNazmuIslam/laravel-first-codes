    <x-layout>

        <x-slot:PageTitle>
            contact
        </x-slot:PageTitle>

    <section id="contact-page">
        <div class="container">
            <h1 class="text-capitalize text-white text-center"><strong> Contact </strong>us</h1>
            <div class="hr mx-auto position-relative my-4" style="width: 15rem ">
                <hr class="bg-white position-absolute w-100">
                <div class="hr-box position-absolute "></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <article class="mt-5 py-4">
                        <p class="mt-5 text-white text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur minima porro voluptas voluptate doloribus iste aperiam, eligendi repudiandae nam nulla consectetur excepturi? Consequatur nesciunt sunt alias aperiam iusto sed ea.</p>
                      </article>
                </div>
            </div>
          
           <div id="form">
            <form action="{{route('sendEmail')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row g-5">
                <div class="col-md-6">
                    <label for="name" class="text-white">Name</label>
                    <input type="text" name="name" class="form-control p-3 @error('name') is-invalid @enderror">
                    @error('name')
                    <small class=" invalid-feedback "> {{ $message}}  </small>
                    @enderror

                </div>
                <div class="col-md-6">
                    <label for="email" class="text-white">email</label>
                    <input type="email" name="email" class="form-control p-3 @error('email') is-invalid @enderror">
                    @error('email')
                    <small class=" invalid-feedback "> {{ $message}}  </small>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="subject" class="text-white ">subject</label>
                   
                    <select name="subject" id="subject " class="form-control p-3 @error('subject') is-invalid @enderror">
                        <option value="" selected>select subject</option>
                        <option value="web design" selected>web design</option>
                        <option value="web development" selected>web development</option>
                    </select>
                    @error('subject')
                    <small class=" invalid-feedback "> {{ $message}}  </small>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="message" class="text-white">message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control @error('message') is-invalid @enderror"></textarea>
                    @error('message')
                    <small class=" invalid-feedback "> {{ $message}}  </small>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="attacment" class="text-white">Attached File <small>(optional)</small></label>
                    <input type="file" name="attacment" id="attacment" class="form-control @error('message') is-invalid @enderror">
                    @error('message')
                    <small class=" invalid-feedback "> {{ $message}}  </small>
                    @enderror
                </div>
                <div class="sbt text-center">
                    <button type="submit" name="submit" class="btn btn-outline-secondary fs-4 mx-auto px-5 py-3">submit</button>
                </div>
                
                @if ( session('status'))
                <x-alert  type="success" message="{{ session('status') }}"  dismissible/>

                @elseif(session('failed'))
                <x-alert  type="danger" message="{{ session('failed') }}"  dismissible/>
                @endif

            </div>
        </form>
           </div>
        </div>
    </section>
    


</x-layout>