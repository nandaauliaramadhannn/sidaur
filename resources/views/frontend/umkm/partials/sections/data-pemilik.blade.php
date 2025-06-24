<div class="col-sm-12">
    <label class="form-check-label">
      <input type="checkbox" name="domisili_sama" id="domisili_sama" class="form-check-input" checked>
      Alamat domisili sama dengan alamat usaha
    </label>
  </div>

  {{-- Form domisili ditampilkan jika tidak sama --}}
  <div id="domisili_fields" style="display: none;">
    <div class="col-sm-6">
      <label class="form-label">Alamat Domisili</label>
      <input type="text" name="alamat_domisili" class="form-control">
    </div>

    <div class="col-sm-6">
      <label class="form-label">Kelurahan Domisili</label>
      <input type="text" name="kelurahan_domisili" class="form-control">
    </div>

    <div class="col-sm-4">
      <label class="form-label">Provinsi Domisili</label>
      <select name="provinsi_domisili_id" id="provinsi_domisili_id" class="form-control">
        <option value="">-- Pilih Provinsi --</option>
        @foreach($provinsis as $prov)
          <option value="{{ $prov->id }}">{{ $prov->nama }}</option>
        @endforeach
      </select>
    </div>

    <div class="col-sm-4">
      <label class="form-label">Kabupaten Domisili</label>
      <select name="kabupaten_domisili_id" id="kabupaten_domisili_id" class="form-control">
        <option value="">-- Pilih Kabupaten --</option>
      </select>
    </div>

    <div class="col-sm-4">
      <label class="form-label">Kecamatan Domisili</label>
      <select name="kecamatan_domisili_id" id="kecamatan_domisili_id" class="form-control">
        <option value="">-- Pilih Kecamatan --</option>
      </select>
    </div>
  </div>
