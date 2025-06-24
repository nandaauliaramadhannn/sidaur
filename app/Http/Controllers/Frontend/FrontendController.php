<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Umkm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $totalumkm = Umkm::count();
        $totalsudahdiverifikasi = Umkm::where('status_verifikasi', 'disetujui')->count();
        $totalbelumdiverifikasi = Umkm::where('status_verifikasi', 'proses')->count();
        $totalditolak = Umkm::where('status_verifikasi', 'ditolak')->count();
        return view('frontend.index', compact('totalumkm', 'totalsudahdiverifikasi', 'totalbelumdiverifikasi', 'totalditolak'));
    }
}
