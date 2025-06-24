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
        <div class="swiper-slide-cover bg-position-top-center" style="background-image: url('{{ asset('frontend/img/frontend.jpeg') }}'); height: 100vh;"></div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-slide-cover bg-position-top-center" style="background-image: url('{{ asset('frontend/img/frontend.jpeg') }}'); height: 100vh;"></div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-slide-cover bg-position-top-center" style="background-image: url('{{ asset('frontend/img/frontend.jpeg') }}'); height: 100vh;"></div>
      </div>
    </div>
    <div class="swiper-pagination mb-4"></div>
  </div>

  <!-- Content -->
  <div class="container position-relative z-2 py-lg-3 py-xl-5 my-5">
    <div class="row pt-md-3 py-xxl-5 my-5 align-items-center">
      <!-- Text Left -->
      <div class="col-lg-8 text-white text-center text-lg-start pb-5">
        <h1 class="display-1 text-uppercase mb-4">Digitalisasi Pendataan UMKM</h1>
        <p class="fs-xl text-black" style="max-width: 600px;">
          Aplikasi Website <strong>"SIDAUR"</strong> Kecamatan Tarumajaya Kab. Bekasi
        </p>
      </div>

      <!-- Foto Orang + Nama -->
      <div class="col-lg-4 d-none d-lg-flex flex-column align-items-center text-white" style="margin-top: -50px;">
        <img src="{{ asset('frontend/img/camat-tarumajaya.png') }}" alt="Camat Tarumajaya" class="img-fluid mb-2" style="max-height: 420px;">
        <h5 class="mt-2 text-black text-center">H. DEDE MAULUDIN HS, S. STP., M.M.</h5>
        <h6 class="text-black text-center">Camat Tarumajaya</h6>
      </div>
    </div>
  </div>

</section>

<!-- Statistik UMKM -->
<section class="container pb-2 pb-sm-3 pb-md-4 pb-lg-5 mb-xl-3 mb-xxl-5">
  <div class="bg-light rounded-5 py-4 py-md-5 px-lg-5">
    <div class="row row-cols-2 row-cols-md-4 g-0">
      <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
        <div class="position-absolute top-50 end-0 translate-middle-y border-end" style="height: 60px;"></div>
        <div class="p-3 px-sm-0 py-sm-4">
          <div class="h2 display-5 text-primary mb-0">{{ optional($totalumkm)->total ?? '0' }}+</div>
          <span>TOTAL UMKM TERDAFTAR</span>
        </div>
      </div>

      <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
        <div class="position-absolute top-50 end-0 translate-middle-y border-end d-none d-md-block" style="height: 60px;"></div>
        <div class="p-3 px-sm-0 py-sm-4">
          <div class="h2 display-5 text-primary mb-0">{{ optional($totalsudahdiverifikasi)->total ?? '0' }}+</div>
          <span>TOTAL SUDAH DIVERIFIKASI</span>
        </div>
      </div>

      <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
        <div class="position-absolute top-50 end-0 translate-middle-y border-end" style="height: 60px;"></div>
        <div class="p-3 px-sm-0 py-sm-4">
          <div class="h2 display-5 text-primary mb-0">{{ optional($totalbelumdiverifikasi)->total ?? '0' }}+</div>
          <span>TOTAL BELUM DIVERIFIKASI</span>
        </div>
      </div>

      <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
        <div class="p-3 px-sm-0 py-sm-4">
          <div class="h2 display-5 text-primary mb-0">{{ optional($totalditolak)->total ?? '0' }}+</div>
          <span>TOTAL DITOLAK</span>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
