<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title> {{$PageTitle}} </title>
   
    <link rel="stylesheet" href="{{ asset('asset/css/MinStyle.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route("Home")}}">Larvel</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
        
                <div class="collapse navbar-collapse " id="navbarContent">
                    <div class="w-100 d-flex justify-content-md-center ">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a href="{{ route("Home")}}" class="nav-link ">Home</a>
                            </li>
                            <li class="nav-item subnavbar_crud_dropdown">
                                <a  class="nav-link ">Crud</a>
                                <ul class="subnavbar_crud subnavbar">
                                    <li class="nav-item">
                                        <a href="{{ route("crud")}}" class="nav-link">Query Crud </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route("EqCrud.index")}}" class="nav-link">EQ Crud</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route("FromValidation")}}"  class="nav-link" >From Validation</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Project
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                  </li>
                            <li class="nav-item">
                                <a href="{{ route("Contact")}}" class="nav-link">contact</a>
                            </li>
                        </ul>
                    </div>
                   
                    <ul class="navbar-nav ms-auto">

                        @if (Gate::allows('isUser')){

                            <li class="nav-item">
                                <a href="{{ route("Contact")}}" class="nav-link">checkout</a>
                            </li>

                            <li class="nav-item dropdown"><a href="{{route('login')}}" class="nav-link" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('dashboard')}}">Profile deshboard</a></li>

                                    <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
                                  </ul>
                            </li>


                        } @elseif(Gate::denies('isUser')) {
                            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="{{route('resgister')}}" class="nav-link">Register</a></li>
                           }
                        @endif

                        
                    </ul>
                   
                </div>
        
            </div>
        </nav>
    </header>
    
    {{$slot}}

    
{{-- bootstap js --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

{{-- min write js --}}
<script src="{{asset('asset/js/MinJavascript.js') }}"></script>
</body>
</html>