<x-layout>

    <x-slot:PageTitle>
        FromValidation 
    </x-slot:PageTitle>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <h1 class="text-center my-5 bg-info text-white py-3 shadow">From Validation </h1>
            
          <form action="{{ route('regdata') }}" id="FormValidation" method="POST" >
            @csrf
            @method('POST');
            <div class="row">
                <div class="col-md-6 my-3">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text"  name="name" id="Name" value="{{ old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Name" >
                        <small class=" invalid-feedback ">
                            @error('name')
                                {{ $message}}
                            @enderror
                        </small>
                      </div>
                </div>
                <div class="col-md-6 my-3">
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="email" id="Email" value="{{ old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="email" >
                        <small id="helpId" class=" invalid-feedback">
                            @error('email')
                            {{ $message}}
                        @enderror
                    </small>
                      </div>
                </div>
              
                <div class="col-md-6 my-3">
                    <div class="form-group">
                        <label for="Class">Class</label>
                        <input type="text" name="class" id="Class" value="{{ old('class')}}" class="form-control @error('class') is-invalid @enderror"placeholder="Class" >
                        <small id="helpId" class="invalid-feedback">
                            @error('class')
                            {{ $message}}
                        @enderror
                    </small>
                      </div>
                </div>
                <div class="col-md-6 my-3">
                    <div class="form-group">
                        <label for="Subject">Subject</label>
                        <input type="text" name="subject" id="Subject" value="{{ old('subject')}}" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" >
                        <small id="helpId" class=" invalid-feedback">
                            @error('subject')
                            {{ $message}}
                        @enderror
                        </small>
                      </div>
                </div>

                <div class="col-md-6 my-3">
                    <div class="form-group">
                        <label for="" class="form-label"> Phone Number</label>
                        <div class="row">
                            <div class="col-4 ">
                                <div class="d-flex position-relative">
                                    <select class="form-select" name="phone_code" id="phone_code">
                                        <option value="1">+60</option>
                                        <option value="4">+666</option>
                                        <option value="2">+880</option>
                                        <option value="3">+8</option>
                                        <option value="4">+971</option>
                                    </select>
                                    <div class="select_down position-absolute">
                                        <i class="fas fa-caret-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <input id="phone" value="{{ old('number')}}" class="form-control @error('number') is-invalid @enderror" name="number" type="number">
                                <small id="helpId" class=" invalid-feedback">
                                    @error('number')
                                {{ $message}}
                            @enderror
                                </small>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <div class="form-group">
                        <label for="Age">Age</label>
                        <input type="number" name="age" id="Age"  value="{{ old('age')}}" class="form-control @error('age') is-invalid @enderror"  placeholder="Age" >

                        <small id="helpId" class=" invalid-feedback">
                            @error('age')
                                {{ $message}}
                            @enderror
                        </small>
                      </div>
                </div>
                <div class="col-md-6 my-3">
                    <div class="form-group">
                        <label for="City">City</label>
                        <select class="form-select @error('city') is-invalid @enderror"  value="{{ old('city')}}"   name="city" id="City">
                            <option value="select">select City</option>
                            
                            
                        </select>

                        <small id="helpId" class="invalid-feedback">

                            @error('city')
                            {{ $message}}
                          @enderror

                        </small>
                      </div>
                   
                </div>
                <div class="col-md-6 my-3">
                    <div class="form-group">
                        <label for="cuntry">cuntry</label>
                        <select class="form-select @error('cuntry') is-invalid @enderror" value="{{ old('cuntry')}}" name="cuntry" id="cuntry">
                            <option value="1">select cuntry</option>
                            
                        </select>
                        <small id="helpId" class=" invalid-feedback">
                            @error('cuntry')
                            {{ $message}}
                        @enderror
                        </small>
                      </div>
                   
                </div>
                <div class="col-md-6 my-3">
                    <div class="form-group">
                        <label for="address">address</label>
                        <input type="text" name="address" id="address"  value="{{ old('address')}}" class="form-control @error('address') is-invalid @enderror"  placeholder="address" >
                        <small id="helpId" class=" invalid-feedback">
                            @error('address')
                            {{ $message}}
                        @enderror
                        </small>
                      </div>
                </div>
                <div class="col-md-6 my-3">
                    <div class="form-group">
                        <label for="postCode">Post code</label>
                        <input type="text" name="postCode" id="postCode" value="{{ old('postCode')}}" class="form-control @error('postCode') is-invalid @enderror" placeholder="Post Code" >
                        <small id="helpId" class=" invalid-feedback">

                            @error('postCode')
                            {{ $message}}
                        @enderror

                        </small>
                      </div>
                </div>
                <div class="col-md-12 my-3">
                    <div class="form-group">
                        <label  for="message">Message</label>
                        <textarea value="{{ old('message')}}" class="form-control @error('message') is-invalid @enderror"  name="message" id="message" cols="30" rows="5" placeholder="message"></textarea>
                        
                        <small id="helpId" class=" invalid-feedback">
                            @error('message')
                            {{ $message}}
                        @enderror
                        </small>
                      </div>
                </div>
                <div class="col-md-12 my-3">
                    <div class="input-group mb-3">
                        <div class="d-flex align-items-center">
                          <input class="form-check-input mt-0" type="checkbox" value="on" name="msgfC1" > <label for="msgfC1" class="mx-4">I am agree with your condition</label>
                        </div>
                      </div>
                </div>
                <div class="col-md-12 my-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="msgfC2" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked"> I will send message </label>
                      </div>
                </div>
               <div class="d-flex justify-content-center"> <button type="submit" class="btn btn-info text-white fs-3 px-5 py-3 fw-bold">Submit</button>
            </div>
            </div>
          </form>

          @if ( session('status'))

          <x-alert  type="success" message="{{ session('status') }}"  dismissible/>

          @elseif(session('failed'))

          <x-alert  type="danger" message="{{ session('failed') }}"  dismissible/>
          
          @endif
          
        </div>
    </div>
</div>






</x-layout>