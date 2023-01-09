@extends('layouts.app')
@section('title'){{ $store->title }}@endsection
@section('adminnav')
@auth
@if(auth()->user()->store && auth()->user()->store->id == $store->id)
<div class="px-3 py-2 text-bg-dark">
    <div class="container" style="align-items: center">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          <img src="/images/logos/{{ $store->logo }}" alt="" width="32" height="32">
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
@auth
@if(auth()->user()->store && auth()->user()->store->id == $store->id)
@else
@section('cart')

    <a href="/home" class="btn btn-outline-dark" type="button">
        السلة
        <span class="badge bg-dark text-white ms-1 rounded-pill">{{ $cartcount }}<i class="fa-solid fa-cart-shopping"></i></span>
    </a>
@endsection
@endif
@endauth
@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"  src="/images/products/{{ $product->image }}" alt="product image" height="300" width="400"></div>
            <div class="col-md-6">
                <div class="small mb-1">SKU: {{ $product->store->title }}</div>
                <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                <div class="fs-5 mb-5">
                    <span>SR {{ $product->price }}</span>
                </div>
                <p class="lead">{{ $product->discription }}</p>
                @auth
                    @if($cartitems->where('id', $product->id)->count())
                       هذا  المنتج موجود مسبقا 
                    @else
                        @if(auth()->user()->store && auth()->user()->store->id == $store->id)
                        @else
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                            <div class="d-flex">
                                <button type="submit" class="btn btn-outline-dark flex-shrink-0" type="button">
                                    <i class="bi-cart-fill me-1"></i>
                                    إضـــافة للعربة
                                </button>
                            </div>
                        </form>
                        @endif
                    @endif
                @else
                <a href="{{ route('login') }}" class="btn btn-outline-warning flex-shrink-0" type="button">
                    <i class="bi-cart-fill me-1"></i>
                     قم بتسجيل الدخول لتتمكن من الشراء
                </a>
                @endif
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">منتجات قد تعجبك</h2>
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
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/store/{{ $store->url }}/{{ $product->id }}">عرض المنتج</a></div>
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
        </div>
    </div>
</section>
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
            <div class="mb-1">
                <a class="link-secondary text-decoration-none" href="https://twitter.com/{{ $store->twitter }}"><i class="fa-brands fa-square-twitter fa-xl"></i></a>
                <a class="link-secondary text-decoration-none" href="https://www.instagram.com/{{ $store->instagram }}"><i class="fa-brands fa-square-instagram fa-xl"></i></a>
                <a class="link-secondary text-decoration-none" href="https://www.snapchat.com/add/{{ $store->snapchat }}"><i class="fa-brands fa-square-snapchat fa-xl"></i></a>
                <a class="link-secondary text-decoration-none" href="https://wa.me/{{ $store->whatsapp }}"><i class="fa-brands fa-square-whatsapp fa-xl"></i></a>
            </div>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>رقم الاتصال</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="https://wa.me/{{ $store->whatsapp }}">{{ $store->whatsapp }}</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>عنا</h5>
        <ul class="list-unstyled text-small">
          <div class="mb-1">{{ $store->about }}</div>
        </ul>
      </div>
    </div>
  </footer>
@endsection