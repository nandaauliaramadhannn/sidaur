{{-- resources/views/frontend/umkm/partials/sections/data-umkm.blade.php --}}
<div class="col-12">
    <h5 class="text-light border-bottom pb-2 mb-3">A. Data UMKM</h5>
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Nama UMKM</label>
    <input name="nama_umkm" class="form-control form-control-lg" type="text" required>
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Bidang Usaha</label>
    <select name="bidang_usaha[]" class="form-control form-control-lg" multiple required>
      <option value="Makanan & Minuman">Makanan & Minuman</option>
      <option value="Fashion">Fashion</option>
      <option value="Kerajinan">Kerajinan</option>
      <option value="Jasa">Jasa</option>
      <option value="Pertanian">Pertanian</option>
      <option value="Perdagangan">Perdagangan</option>
      <option value="Lainnya">Lainnya</option>
    </select>
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Bidang Usaha Lainnya</label>
    <input name="bidang_usaha_lainnya" class="form-control form-control-lg" type="text">
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Alamat Usaha</label>
    <input name="alamat_usaha" class="form-control form-control-lg" type="text" required>
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Kelurahan</label>
    <input name="kelurahan" class="form-control form-control-lg" type="text" required>
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Provinsi</label>
    <select name="provinsi_id" id="provinsi" class="form-control form-control-lg" required>
      <option value="">-- Pilih Provinsi --</option>
      @foreach($provinsis as $prov)
        <option value="{{ $prov->id }}">{{ $prov->nama }}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Kabupaten</label>
    <select name="kabupaten_id" id="kabupaten" class="form-control form-control-lg" required></select>
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Kecamatan</label>
    <select name="kecamatan_id" id="kecamatan" class="form-control form-control-lg" required></select>
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Telepon / WhatsApp</label>
    <input name="telepon" class="form-control form-control-lg" type="text" required>
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Email</label>
    <input name="email" class="form-control form-control-lg" type="email">
  </div>

  <div class="col-md-6">
    <label class="form-label fs-base">Tahun Berdiri</label>
    <input name="tahun_berdiri" class="form-control form-control-lg" type="text">
  </div>
