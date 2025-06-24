<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use App\Models\User;
use App\Models\Umkm;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class IsiUmkmController extends Controller
{
    public function index()
    {
        $provinsis = Provinsi::orderBy('nama')->get();
        $kabupatens = Kabupaten::orderBy('nama')->get();
        $kecamatans = Kecamatan::orderBy('nama')->get();
        return view('frontend.umkm.isi-umkm', compact('provinsis', 'kabupatens', 'kecamatans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|unique:users,email',
            'user_password' => 'required|string|min:6',

            'nama_umkm' => 'required|string|max:255',
            'bidang_usaha' => 'required|array',
            'bidang_usaha_lainnya' => 'nullable|string',
            'alamat_usaha' => 'required|string',
            'kelurahan' => 'required|string',
            'provinsi_id' => 'required|exists:provinsis,id',
            'kabupaten_id' => 'required|exists:kabupatens,id',
            'kecamatan_id' => 'required|exists:kecamatans,id',
            'telepon' => 'required|string',
            'email' => 'nullable|email',
            'tahun_berdiri' => 'nullable|string',

            'nama_pemilik' => 'required|string',
            'nik' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'domisili_sama_dengan_usaha' => 'nullable|boolean',
            'alamat_domisili' => 'nullable|string',

            'jumlah_karyawan' => 'nullable|integer|min:0',
            'status_tempat_usaha' => 'nullable|in:Milik Sendiri,Sewa,Lainnya',
            'skala_usaha' => 'nullable|string',
            'jenis_produk' => 'nullable|string',
            'pemasaran' => 'nullable|array',
            'pemasaran_lainnya' => 'nullable|string',
            'media_promosi' => 'nullable|string',
            'platform_online' => 'nullable|string',

            'legalitas_izin' => 'nullable|boolean',
            'nama_badan_usaha' => 'nullable|string',
            'npwp' => 'nullable|boolean',

            'dukungan_dibutuhkan' => 'nullable|array',
            'dukungan_dibutuhkan_lainnya' => 'nullable|string',

            'tanggal_pengisian' => 'nullable|date',
        ]);

        try {
            $user = User::create([
                'name' => $request->user_name,
                'email' => $request->user_email,
                'password' => Hash::make($request->user_password),
                'role' => 'user',
            ]);

            $domisiliSama = $request->filled('domisili_sama_dengan_usaha') && $request->domisili_sama_dengan_usaha;
            $alamat_domisili = $domisiliSama ? $request->alamat_usaha : $request->alamat_domisili;

            $umkm = Umkm::create([
                'user_id' => $user->id,
                'nama_umkm' => $request->nama_umkm,
                'bidang_usaha' => implode(',', $request->bidang_usaha),
                'bidang_usaha_lainnya' => $request->bidang_usaha_lainnya,
                'alamat_usaha' => $request->alamat_usaha,
                'kelurahan' => $request->kelurahan,
                'provinsi_id' => $request->provinsi_id,
                'kabupaten_id' => $request->kabupaten_id,
                'kecamatan_id' => $request->kecamatan_id,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'tahun_berdiri' => $request->tahun_berdiri,

                'nama_pemilik' => $request->nama_pemilik,
                'nik' => $request->nik,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat_domisili' => $alamat_domisili,

                'jumlah_karyawan' => $request->jumlah_karyawan ?? 0,
                'status_tempat_usaha' => $request->status_tempat_usaha,
                'skala_usaha' => $request->skala_usaha,
                'jenis_produk' => $request->jenis_produk,
                'pemasaran' => is_array($request->pemasaran) ? implode(',', $request->pemasaran) : null,
                'pemasaran_lainnya' => $request->pemasaran_lainnya,
                'media_promosi' => $request->media_promosi,
                'platform_online' => $request->platform_online,

                'legalitas_izin' => $request->filled('legalitas_izin'),
                'nama_badan_usaha' => $request->nama_badan_usaha,
                'npwp' => $request->filled('npwp'),

                'dukungan_dibutuhkan' => is_array($request->dukungan_dibutuhkan) ? implode(',', $request->dukungan_dibutuhkan) : null,
                'dukungan_dibutuhkan_lainnya' => $request->dukungan_dibutuhkan_lainnya,

                'tanggal_pengisian' => $request->tanggal_pengisian ?? now(),
                'status_verifikasi' => 'proses',
            ]);

            Alert::success('Berhasil', 'Data UMKM berhasil disimpan.');
            return redirect()->route('isi-pendataan-umkm');
        } catch (Exception $e) {
            Alert::error('Gagal', 'Data UMKM gagal disimpan.');
            return redirect()->route('isi-pendataan-umkm')->withInput();
        }
    }
}
