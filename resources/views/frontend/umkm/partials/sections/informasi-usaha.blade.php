<div class="col-sm-6">
    <label class="form-label fs-base">Jumlah Karyawan</label>
    <input name="jumlah_karyawan" class="form-control form-control-lg" type="number" min="0">
  </div>
  <div class="col-sm-6">
    <label class="form-label fs-base">Status Tempat Usaha</label>
    <select name="status_tempat_usaha" class="form-control form-control-lg">
      <option value="">-- Pilih --</option>
      <option value="Milik Sendiri">Milik Sendiri</option>
      <option value="Sewa">Sewa</option>
      <option value="Lainnya">Lainnya</option>
    </select>
  </div>
  <div class="col-sm-6">
    <label class="form-label fs-base">Skala Usaha</label>
    <select name="skala_usaha" class="form-control form-control-lg">
      <option value="">-- Pilih --</option>
      <option value="Mikro (omzet ≤ Rp300 juta/tahun)">Mikro (≤ Rp300 juta)</option>
      <option value="Kecil (Rp300 juta – Rp2,5 miliar/tahun)">Kecil</option>
      <option value="Menengah (Rp2,5 miliar – Rp50 miliar/tahun)">Menengah</option>
    </select>
  </div>
  <div class="col-sm-6">
    <label class="form-label fs-base">Jenis Produk / Jasa</label>
    <textarea name="jenis_produk" class="form-control form-control-lg"></textarea>
  </div>
  <div class="col-sm-6">
    <label class="form-label fs-base">Pemasaran Produk</label>
    <select name="pemasaran[]" class="form-control form-control-lg" multiple>
      <option value="Lokal">Lokal</option>
      <option value="Regional">Regional</option>
      <option value="Nasional">Nasional</option>
      <option value="Ekspor">Ekspor</option>
    </select>
  </div>
  <div class="col-sm-6">
    <label class="form-label fs-base">Media Promosi</label>
    <input name="media_promosi" class="form-control form-control-lg" type="text">
  </div>
  <div class="col-sm-6">
    <label class="form-label fs-base">Platform Online</label>
    <input name="platform_online" class="form-control form-control-lg" type="text">
  </div>
