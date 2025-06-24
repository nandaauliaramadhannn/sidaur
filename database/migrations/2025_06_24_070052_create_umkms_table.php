<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');

            // A. Data UMKM
            $table->string('nama_umkm');
            $table->string('bidang_usaha'); // comma-separated
            $table->string('bidang_usaha_lainnya')->nullable();
            $table->text('alamat_usaha');
            $table->string('kelurahan');
            $table->foreignId('kecamatan_id')->constrained()->onDelete('restrict');
            $table->foreignId('kabupaten_id')->constrained()->onDelete('restrict');
            $table->foreignId('provinsi_id')->constrained()->onDelete('restrict');
            $table->string('telepon');
            $table->string('email')->nullable();
            $table->string('tahun_berdiri')->nullable();

            // B. Data Pemilik
            $table->string('nama_pemilik');
            $table->string('nik');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('tanggal_lahir');
            $table->text('alamat_domisili')->nullable();

            // C. Informasi Usaha
            $table->integer('jumlah_karyawan')->default(0);
            $table->enum('status_tempat_usaha', ['Milik Sendiri', 'Sewa', 'Lainnya'])->nullable();
            $table->enum('skala_usaha', [
                'Mikro (omzet ≤ Rp300 juta/tahun)',
                'Kecil (Rp300 juta – Rp2,5 miliar/tahun)',
                'Menengah (Rp2,5 miliar – Rp50 miliar/tahun)'
            ])->nullable();
            $table->text('jenis_produk')->nullable();
            $table->string('pemasaran')->nullable(); // comma-separated
            $table->string('pemasaran_lainnya')->nullable();
            $table->string('media_promosi')->nullable();
            $table->string('platform_online')->nullable();

            // D. Legalitas Usaha
            $table->boolean('legalitas_izin')->default(false);
            $table->string('nama_badan_usaha')->nullable();
            $table->boolean('npwp')->default(false);

            // E. Dukungan
            $table->string('dukungan_dibutuhkan')->nullable(); // comma-separated
            $table->string('dukungan_dibutuhkan_lainnya')->nullable();

            $table->date('tanggal_pengisian')->nullable();
            $table->string('tanda_tangan_pemilik')->nullable();
            $table->enum('status_verifikasi', ['proses', 'disetujui', 'ditolak'])->default('proses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
