@extends('layouts.app')
@section('title'){{ $store->title }}@endsection
@section('adminnav')
@auth
@if(auth()->user()->store && auth()->user()->store->id == $store->id)
<div class="px-3 py-2 text-bg-dark">
    <div class="container" style="align-items: center">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          <img src="/images/logos/{{ $store->logo }}" alt="" width="40" height="32">
        </a>
        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
                <a href="/home" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                الرئيسية
                </a>
            </li>
            <li>
                <a href="/dashboard" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                الادارة
                </a>
            </li>
            <li>
                <a href="/store/{{ $store->url }}" class="nav-link  text-secondary">
                  <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                  المتجر
                </a>
            </li>
        </ul>
      </div>
    </div>
</div>
@endif
@endauth  
@endsection
@if(auth()->user()->store && !auth()->user()->store->id == $store->id)
@section('cart')
<form class="d-flex">
    <button class="btn btn-outline-dark" type="submit">
        السلة
        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
        <i class="fa-solid fa-cart-shopping"></i>
    </button>
</form>
@endsection
@endif
@section('content')
<div class="px-4 py-5 text-center">
    <img class="d-block mx-auto mb-4"
    @if($store->logo)
        src="/images/logos/{{ $store->logo }}"
    @else
        src="https://cdn-icons-png.flaticon.com/512/9326/9326748.png"
    @endif
    alt="" width="72" height="72">
    <h1 class="display-5 fw-bold">{{ $store->title }}</h1>
    <div class="col-lg-6 mx-auto">
        @if($store->about)
            <p class="lead mb-4">{{ $store->about }}</p>
        @else
            <p class="lead mb-4">https://stores.kku.edu.sa/store/{{ $store->url }}</p>
        @endif
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @forelse ($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{ $store->title }}</div>
                            <!-- Product image-->
                            <img class="card-img-top" style="object-fit: cover; object-position: bottom;" src="/images/products/{{ $product->image }}" height="140" width="200" alt="product image">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    <!-- Product price-->
                                    SR {{ $product->price }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">عرض المنتج</a></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class=" card-body cardbody-color">
                        <div class="text-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/2523/2523206.png" class="img-fluid profile-image-pic  my-3" width="200px" alt="create">
                        </div>
                        <div class="card-body text-center">
                            <h3>لاتوجد منتجات بعد</h3>
                        </div>
                    </div> 
                @endforelse
                

                {{--<div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill">ss</div>
                                    <div class="bi-star-fill">ss</div>
                                    <div class="bi-star-fill">ss</div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill">ss</div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/images/logos/{{ $store->logo }}" alt="" width="24" height="19">
        <small class="d-block mb-3 text-muted">&copy; {{ $store->title }}</small>
      </div>
      <div class="col-6 col-md">
        <h5>حسابات التواصل</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>رقم الاتصال</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>عنا</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
@endsection
