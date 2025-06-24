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
