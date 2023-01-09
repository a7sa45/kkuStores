@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card my-5 card-body cardbody-color p-lg-5">
                    <div class="text-center">
                        <img 
                        @if($store->logo)
                        src="/images/logos/{{ $store->logo }}"
                        @else
                        src="https://cdn-icons-png.flaticon.com/512/2653/2653627.png"
                        @endif
                        class="img-fluid profile-image-pic  my-3"
                        width="200px" alt="create">
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('update-store') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <input id="title" placeholder="{{ $store->title }}" value="{{ $store->title }}" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group" style="text-align: left">
                                <input id="logo" style="text-align: left; border-top-left-radius:0; border-bottom-left-radius:0" placeholder="logo" type="file" class="form-control rounded-end @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}" required autocomplete="logo" autofocus>
                                <span class="input-group-text rounded-start rounded-end-0" style="text-align: left; border-top-right-radius:0; border-bottom-right-radius:0" id="basic-addon3">تحديث شعار المتجر</span>
                                </div>
                                @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <textarea id="about"
                                @if($store->about)
                                    value="{{ $store->about }}"
                                @else
                                    placeholder="وصف المتجر"
                                @endif
                                type="text" class="form-control @error('about') is-invalid @enderror" name="about" value="{{ old('about') }}" required autocomplete="about" autofocus>{{ $store->about }}</textarea>
                                @error('about')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group" style="text-align: left">
                                <input id="twitter" style="text-align: left; border-top-left-radius:0; border-bottom-left-radius:0" 
                                @if($store->twitter)
                                    value="{{ $store->twitter }}"
                                @else
                                    placeholder="username"
                                @endif
                                type="text" class="form-control rounded-end @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') }}" required autocomplete="twitter" autofocus>
                                <span class="input-group-text rounded-start rounded-end-0" style="text-align: left; border-top-right-radius:0; border-bottom-right-radius:0" id="basic-addon3"><i class="fa-brands fa-twitter"></i></span>
                                </div>
                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group" style="text-align: left">
                                <input id="instagram" style="text-align: left; border-top-left-radius:0; border-bottom-left-radius:0"
                                @if($store->instagram)
                                    value="{{ $store->instagram }}"
                                @else
                                    placeholder="username"
                                @endif
                                type="text" class="form-control rounded-end @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}" required autocomplete="instagram" autofocus>
                                <span class="input-group-text rounded-start rounded-end-0" style="text-align: left; border-top-right-radius:0; border-bottom-right-radius:0" id="basic-addon3"><i class="fa-brands fa-instagram"></i></span>
                                </div>
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group" style="text-align: left">
                                <input id="snapchat" style="text-align: left; border-top-left-radius:0; border-bottom-left-radius:0"
                                @if($store->snapchat)
                                    value="{{ $store->snapchat }}"
                                @else 
                                    placeholder="username"
                                @endif 
                                type="text" class="form-control rounded-end @error('snapchat') is-invalid @enderror" name="snapchat" value="{{ old('snapchat') }}" required autocomplete="snapchat" autofocus>
                                <span class="input-group-text rounded-start rounded-end-0" style="text-align: left; border-top-right-radius:0; border-bottom-right-radius:0" id="basic-addon3"><i class="fa-brands fa-snapchat"></i></span>
                                </div>
                                @error('snapchat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group" style="text-align: left">
                                <input id="whatsapp" style="text-align: left; border-top-left-radius:0; border-bottom-left-radius:0"
                                @if($store->whatsapp)
                                    value="{{ $store->whatsapp }}"
                                @else  
                                    placeholder="number"
                                @endif 
                                type="text" class="form-control rounded-end @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" required autocomplete="whatsapp" autofocus>
                                <span class="input-group-text rounded-start rounded-end-0" style="text-align: left; border-top-right-radius:0; border-bottom-right-radius:0" id="basic-addon3"><i class="fa-brands fa-whatsapp"></i></span>
                                </div>
                                @error('whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
    
                            <input type="hidden" name="store_id" value="{{ $store->id }}">
                            <div class="mb-0">
                                <button type="submit" style="background-color: #0e1c36; color: #fff; hover{color: #0e1c36;}" class="btn btn-color px-5 mb-5 w-100">
                                    <i class="fa-solid fa-file-pen"></i>  تـــحديث 
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