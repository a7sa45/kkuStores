@extends('layouts.app')

@section('content')
<style>
    .btn-color{
        background-color: #0e1c36;
        color: #fff;
    
    }

    .profile-image-pic{
        height: 200px;
        width: 200px;
        object-fit: cover;
    }



    .cardbody-color{
        background-color: #ebf2fa;
    }

    a{
        text-decoration: none;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 offset-md-3">
                <div class="card my-5 card-body cardbody-color p-lg-5">
        
                    <div class="text-center">
                        <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                        width="200px" alt="profile">
                    </div>
        
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            
                                <input id="email" placeholder="البريد الالكتروني" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            
                        </div>

                        <div class="mb-3">
                            <input id="password" placeholder="كلمة المرور" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>

                        

                        
                        
                        <button type="submit" style="background-color: #0e1c36; color: #fff;" class="btn btn-color px-5 mb-5 w-100">
                            دخول
                        </button>
                        
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
          </div>
    </div>
    
</div>
@endsection
