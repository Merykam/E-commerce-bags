<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">






    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>


</head>

<body>
    <nav class="navbar navbar-expand-md  nav-admin shadow-sm d-flex align-items-cente justify-content-between ">
        <div class="container">
            <a class="navbar-brand d-flex" href="{{ url('/') }}">
                <div class="d-flex align-items-center">
                    <img width="40px" height="40px" class="brand-img" src="{{ asset('images/green.png') }}"
                        alt="" srcset="">
                    <h1 class="brand">LuxeTote</h1>
                </div>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <div class="dropdown">
                            <a class=" user-name dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                                id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                                aria-expanded="false">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                    height="30" alt="Black and White Portrait of a Man" loading="lazy" />
                                <span class="ms-2">{{ Auth::user()->name }}</span>

                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                                <li>
                                    <a class="dropdown-item" href="#">My profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                </div>

            @endguest
            </ul>
        </div>

    </nav>


    {{-- <form 
        id="formAccountSettings" 
        method="POST" 
        action="{{ route('profile.update',auth()->id()) }}" 
        enctype="multipart/form-data"
        class="needs-validation" 
        role="form"
        novalidate
    >
    @csrf
    <div class="card-body">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">{{ trans('sentence.name')}}</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">{{ trans('sentence.email')}}</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com">
                <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
            </div>
            <div class="mt-2">
                <button type="submit" class="button-create me-2">{{ trans('sentence.save_changes')}}</button>
            </div>
        </div>
    </div>
</form> --}}



    <div class="container p-3" style="border: 1px gray solid; border-radius : 2rem; box-shadow: #5c8763 5px 10px; margin-top: 4rem;" >
  
        <hr>
        <div class="row  ">
            <!-- left column -->
            <div class="col-md-4">
                <div class="text-center">
                    <img src="//placehold.it/100" class="avatar rounded-circle" alt="avatar">


                    <input type="file" class="form-control">
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-8 personal-info ">
                {{-- <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                    This is an <strong>.alert</strong>. Use this to show important messages to the user.
                </div> --}}
                {{-- <h3 style="color : green">Personal info</h3> --}}

                <form class="form-horizontal"  id="formAccountSettings" 
                method="POST" 
                action="{{ route('profile.update',auth()->id()) }}" 
                enctype="multipart/form-data"
                class="needs-validation" 
                role="form"
                novalidate>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <div class="">
                            <input value="{{ auth()->user()->name }}" class="form-control" type="text"  name="name">
                        </div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <div class="">
                            <input value="{{ auth()->user()->email }}" class="form-control" type="email" name="email">
                        </div>
                    </div>

                    {{-- password --}}

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="mb-3">
                    <label for="oldPasswordInput" class="form-label">Old Password</label>
                    <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                        placeholder="Old Password">
                    @error('old_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="newPasswordInput" class="form-label">New Password</label>
                    <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                        placeholder="New Password">
                    @error('new_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                    <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                        placeholder="Confirm New Password">
                </div>

                    {{-- end password --}}
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" style="background-color:green !important; color : white;" class="btn " value="Save Changes">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>


</body>

</html>
