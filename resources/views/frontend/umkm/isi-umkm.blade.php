@extends('layouts.frontend.app', ['title' => 'Pengisian UMKM'])
@section('content')
<section class="bg-secondary py-5">
  <div class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5">
    <nav aria-label="breadcrumb">
      <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pengisian UMKM</li>
      </ol>
    </nav>

    <h1 class="display-2">Pengisian UMKM</h1>
    <p class="fs-lg pb-4 mb-2 mb-sm-3">Silakan isi data UMKM Anda</p>
  </div>
  <div style="height: 250px;"></div>
</section>

<section class="container" style="margin-top: -260px;" data-bs-theme="dark">
  <div class="card border-0 bg-primary position-relative py-lg-4 py-xl-5">
    <div class="card-body position-relative z-2 py-5">
      <form class="mx-auto" action="{{ route('isi-umkm.store') }}" method="POST" style="max-width: 900px;">
        @csrf
        <h2 class="h1 card-title text-center pb-4">Formulir Pendataan UMKM</h2>

        <div class="row g-4">
          {{-- A. Data UMKM --}}
          @include('frontend.umkm.partials.sections.data-umkm')

          {{-- B. Data Pemilik --}}
          @include('frontend.umkm.partials.sections.data-pemilik')

          {{-- C. Informasi Usaha --}}
          @include('frontend.umkm.partials.sections.informasi-usaha')

          {{-- D. Legalitas Usaha --}}
          @include('frontend.umkm.partials.sections.legalitas')

          {{-- E. Kebutuhan / Permasalahan --}}
          @include('frontend.umkm.partials.sections.kebutuhan')

          {{-- Submit --}}
          <div class="col-12 text-center pt-4">
            <button type="submit" class="btn btn-lg btn-light">Kirim Data</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection

@push('js')
<script>
  document.querySelector('[name="domisili_sama_dengan_usaha"]').addEventListener('change', function () {
    const form = document.getElementById('form-domisili');
    form.style.display = this.checked ? 'none' : 'flex';
  });

  // AJAX load kabupaten & kecamatan
  const loadOptions = (url, target) => {
    fetch(url)
      .then(res => res.json())
      .then(data => {
        const select = document.getElementById(target);
        select.innerHTML = '<option value="">-- Pilih --</option>';
        data.forEach(d => {
          select.innerHTML += `<option value="${d.id}">${d.nama}</option>`;
        });
      });
  };

  document.getElementById('provinsi').addEventListener('change', function () {
    loadOptions(`/get-kabupaten/${this.value}`, 'kabupaten');
  });

  document.getElementById('kabupaten').addEventListener('change', function () {
    loadOptions(`/get-kecamatan/${this.value}`, 'kecamatan');
  });

  document.getElementById('domisili_provinsi')?.addEventListener('change', function () {
    loadOptions(`/get-kabupaten/${this.value}`, 'domisili_kabupaten');
  });

  document.getElementById('domisili_kabupaten')?.addEventListener('change', function () {
    loadOptions(`/get-kecamatan/${this.value}`, 'domisili_kecamatan');
  });
  document.getElementById('domisili_sama').addEventListener('change', function () {
    document.getElementById('domisili_fields').style.display = this.checked ? 'none' : 'flex';
  });

  // Domisili Wilayah AJAX
  $('#provinsi_domisili_id').change(function() {
    const provId = $(this).val();
    $('#kabupaten_domisili_id').html('<option value="">Memuat...</option>');
    $.get(`/get-kabupaten/${provId}`, function(res) {
      let options = '<option value="">-- Pilih Kabupaten --</option>';
      res.forEach(kab => {
        options += `<option value="${kab.id}">${kab.nama}</option>`;
      });
      $('#kabupaten_domisili_id').html(options);
    });
  });

  $('#kabupaten_domisili_id').change(function() {
    const kabId = $(this).val();
    $('#kecamatan_domisili_id').html('<option value="">Memuat...</option>');
    $.get(`/get-kecamatan/${kabId}`, function(res) {
      let options = '<option value="">-- Pilih Kecamatan --</option>';
      res.forEach(kec => {
        options += `<option value="${kec.id}">${kec.nama}</option>`;
      });
      $('#kecamatan_domisili_id').html(options);
    });
  });
</script>
@endpush
