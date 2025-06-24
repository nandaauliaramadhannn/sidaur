@extends('layouts.frontend.app', ['title' => 'Selamat datang di sidaur'])
@section('content')
<section class="position-relative min-vh-100 py-5" data-bs-theme="light">

    <!-- Background image slider -->
    <div class="swiper swiper-scale-effect position-absolute top-0 start-0 w-100 h-100" data-swiper-options='{
      "effect": "fade",
      "speed": 800,
      "autoplay": {
        "delay": 7000,
        "disableOnInteraction": false
      },
      "pagination": {
        "el": ".swiper-pagination",
        "clickable": true
      }
    }'>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="swiper-slide-cover bg-position-top-center" style="background-image: url('{{asset('frontend/img/frontend.jpeg')}}');"></div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-slide-cover bg-position-top-center" style="background-image: url('{{asset('frontend/img/frontend.jpeg')}}');"></div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-slide-cover bg-position-top-center" style="background-image: url('{{asset('frontend/img/frontend.jpeg')}}');"></div>
        </div>
      </div>
      <div class="swiper-pagination mb-4"></div>
    </div>

    <!-- Content -->
    <div class="container position-relative z-2 py-lg-3 py-xl-5 my-5">
      <div class="row pt-md-3 py-xxl-5 my-5">
        <div class="col py-5 mb-md-4 mb-lg-5">
          <h1 class="display-1 text-uppercase mb-4">Digitalisasi Pendataan UMKM</h1>
          {{-- <p class="d-block text-body fs-xl pb-2 mb-4 mb-md-5" style="max-width: 500px; color: #000;">
            Aplikasi Website "SIDAUR" Kecamatan Tarumajaya Kab. Bekasi
          </p> --}}
        </div>
      </div>
    </div>
  </section>
  <section class="card border-0 mb-4" id="card-alt-style">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content">
        <div class="tab-pane fade show active" id="preview2" role="tabpanel">
          <div class="d-md-flex align-items-center">
            <div class="w-md-50 w-100 mb-4 mb-md-0">
              <div class="card border-0 bg-secondary mx-auto" style="max-width: 22rem;">
                <div class="card-body">
                  <h4 class="card-title">Panduan Pengajuan UMKM</h4>
                  <p class="card-text"></p>
                  <a class="btn btn-primary" href="#">Panduan</a>
                </div>
              </div>
            </div>
            <div class="w-md-50 w-100 bg-secondary p-4">
              <div class="card border-0 mx-auto" style="max-width: 22rem;">
                <div class="card-body">
                  <h4 class="card-title">Ajukan Perizinan UMKM</h4>
                  <p class="card-text"></p>
                  <a class="btn btn-primary" href="#">Pengajuan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container pb-2 pb-sm-3 pb-md-4 pb-lg-5 mb-xl-3 mb-xxl-5">
    <div class="bg-light rounded-5 py-4 py-md-5 px-lg-5">
      <div class="row row-cols-2 row-cols-md-4 g-0">
        <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
          <div class="position-absolute top-50 end-0 translate-middle-y border-end" style="height: 60px;"></div>
          <div class="p-3 px-sm-0 py-sm-4">
            <div class="h2 display-5 text-primary mb-0">{{optional($totalumkm)->total ?? '0'}}+</div>
            <span>TOTAL UMKM TERDAFTAR</span>
          </div>
        </div>
        <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
          <div class="position-absolute top-50 end-0 translate-middle-y border-end d-none d-md-block" style="height: 60px;"></div>
          <div class="p-3 px-sm-0 py-sm-4">
            <div class="h2 display-5 text-primary mb-0">{{optional($totalsudahdiverifikasi)->total ?? '0'}}+</div>
            <span>TOTAL SUDAH DIVERIFIKASI</span>
          </div>
        </div>
        <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
          <div class="position-absolute top-50 end-0 translate-middle-y border-end" style="height: 60px;"></div>
          <div class="p-3 px-sm-0 py-sm-4">
            <div class="h2 display-5 text-primary mb-0">{{optional($totalbelumdiverifikasi)->total ?? '0'}}+</div>
            <span>TOTAL BELUM DIVERIFIKASI</span>
          </div>
        </div>
        <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
          <div class="p-3 px-sm-0 py-sm-4">
            <div class="h2 display-5 text-primary mb-0">{{optional($totalditolak)->total ?? '0'}}+</div>
            <span>TOTAL DITOLAK</span>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
