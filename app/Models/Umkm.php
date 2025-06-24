<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $fillable = [
        'user_id',
        'nama_umkm',
        'bidang_usaha',
        'bidang_usaha_lainnya',
        'alamat_usaha',
        'kelurahan',
        'kecamatan_id',
        'kabupaten_id',
        'provinsi_id',
        'telepon',
        'email',
        'tahun_berdiri',
        'nama_pemilik',
        'nik',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat_domisili',
        'jumlah_karyawan',
        'status_tempat_usaha',
        'skala_usaha',
        'jenis_produk',
        'pemasaran',
        'pemasaran_lainnya',
        'media_promosi',
        'platform_online',
        'legalitas_izin',
        'nama_badan_usaha',
        'npwp',
        'dukungan_dibutuhkan',
        'dukungan_dibutuhkan_lainnya',
        'tanggal_pengisian',
        'tanda_tangan_pemilik',
        'status_verifikasi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
