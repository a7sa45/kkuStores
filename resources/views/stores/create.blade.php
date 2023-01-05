@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card my-5 card-body cardbody-color p-lg-5">
                    <div class="text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/1420/1420868.png" class="img-fluid profile-image-pic  my-3"
                        width="200px" alt="create">
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('save-store') }}">
                            @csrf
    
                            <div class="mb-3">
                                <input id="title" placeholder="اسم المتجر" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group" style="text-align: left">
                                <input id="url" style="text-align: left; border-top-left-radius:0; border-bottom-left-radius:0" placeholder="URL" type="text" class="form-control rounded-end @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required autocomplete="url" autofocus>
                                <span class="input-group-text rounded-start rounded-end-0" style="text-align: left; border-top-right-radius:0; border-bottom-right-radius:0" id="basic-addon3">$/https://store.edu.sa</span>
                                </div>
                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
    
    
                            <div class="mb-0">
                                <button type="submit" style="background-color: #0e1c36; color: #fff; hover{color: #0e1c36;}" class="btn btn-color px-5 mb-5 w-100">
                                    <i class="fa-solid fa-circle-plus"></i> إنـــــشاء 
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@endsection
