@extends('layouts.dashboard')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">لوحة القيادة</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">تصدير</button>
    </div>
    <a href="/storeedit" type="button" class="btn btn-sm btn-outline-secondary">
      <i class="fa-solid fa-gear"></i>
      تعديل اعدادات المتجر
    </a>
  </div>
</div>

<div class="row">
  <div class="col-xl-3 col-md-6">
      <div class="card bg-primary text-white mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-4"><i class="fa-solid fa-users fa-2xl"></i></div>
              <div class="col-4"></div>
              <div class="col-4"><h4>4000</h4></div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white stretched-link" href="#"><strong>جميع العملاء</strong></a>
              <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div class="card bg-warning text-white mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-4"><i class="fa-solid fa-cart-shopping fa-2xl"></i></div>
            <div class="col-4"></div>
            <div class="col-4"><h4>{{ $products_count }}</h4></div>
          </div>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="{{ route('dashboard_products') }}"><strong>جميع المنتجات</strong></a>
            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
        </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div class="card bg-success text-white mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-4"><i class="fa-solid fa-cart-flatbed-suitcase fa-2xl"></i></div>
            <div class="col-4"></div>
            <div class="col-4"><h4>400</h4></div>
          </div>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="#"><strong>جميع الطلبات</strong></a>
            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
        </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div class="card bg-dark text-white mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-4"><i class="fa-solid fa-person-walking-arrow-right fa-2xl"></i></div>
            <div class="col-4"></div>
            <div class="col-4"><h4>400</h4></div>
          </div>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="#"><strong>جميع الزيارات</strong></a>
            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
        </div>
    </div>
  </div>
</div>

<h2>معلومات المتجر</h2>
<div class="table-responsive">
  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="/images/logos/{{ auth()->user()->store->logo }}" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">{{ auth()->user()->store->title }}</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">{{ auth()->user()->store->about }}</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a type="button" href="/store/{{ auth()->user()->store->url }}" class="btn btn-outline-secondary btn-lg px-4"><i class="fa-solid fa-eye"></i>مشاهدة</a>
      </div>
    </div>
  </div>
</div>
@endsection