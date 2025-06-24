<?php
namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;

class WilayahController extends Controller
{
    public function getKabupaten($provinsi_id)
    {
        return response()->json(
            Kabupaten::where('provinsi_id', $provinsi_id)->get()
        );
    }

    public function getKecamatan($kabupaten_id)
    {
        return response()->json(
            Kecamatan::where('kabupaten_id', $kabupaten_id)->get()
        );
    }
}
