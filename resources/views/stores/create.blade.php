@extends('layouts.app')
@section('content')
<section class="relative container px-4 max-w-5xl mx-auto pt-16 md:pt-0">
    <div class="w-full max-w-md mx-auto p-6">
      <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm">
        <div class="p-4 sm:p-7">
          <div class="text-center">
            
            <h1 class="block text-2xl font-bold text-gray-800">إنـــــشاء متجر</h1>
            <p class="mt-2 text-sm text-gray-600">
              متجرك على بعد خطوة
            </p>
          </div>

          <div class="mt-5">
            <form method="POST" action="{{ route('save-store') }}">
            @csrf
              <div class="grid gap-y-4">
              <div>
                  <label for="email" class="block text-sm mb-2"> اسم المتجر</label>
                  <div class="relative">
                    <input type="text" id="title" name="title" class="py-3 px-4 block w-full border-gray-200 @error('title') border-red-200 px-8 @enderror rounded-md text-sm focus:border-thir focus:ring-thir" value="{{ old('title') }}" autocomplete="title" required placeholder="اسم المتجر">
                    @error('title')
                    <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                      <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg>
                    </div>
                    @enderror
                  </div>
                  @error('title')
                  <p class="text-xs text-red-600 mt-2" id="title-error">{{$message}}</p>
                  @enderror

                </div>
                
                <div>
                  <div class="flex justify-between items-center">
                    <label for="url" class="block text-sm mb-2">رابط المتجر</label>
                  </div>
                  <div class="relative">
                    <input type="text" id="url" name="url" class="py-3 px-4 block w-full border-gray-200 @error('url') border-red-200 px-8 @enderror rounded-md text-sm focus:border-thir focus:ring-thir" required autocomplete="current-url">
                    @error('url')
                    <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                      <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg>
                    </div>
                    @enderror
                  </div>
                  @error('url')
                  <p class="hidden text-xs text-red-600 mt-2" id="url-error">{{$message}}</p>
                @enderror
                </div>

                <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-slate-900 text-white hover:bg-slate-700 ext-sm">إنـــــشاء</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
{{--<div class="container">
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
                                <span class="input-group-text rounded-start rounded-end-0" style="text-align: left; border-top-right-radius:0; border-bottom-right-radius:0" id="basic-addon3">/https://store.edu.sa/store</span>
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
</div>--}}
@endsection
