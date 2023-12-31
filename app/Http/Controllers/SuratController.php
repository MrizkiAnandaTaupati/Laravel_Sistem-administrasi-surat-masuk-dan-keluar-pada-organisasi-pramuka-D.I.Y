<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;

class SuratController extends Controller
{
    function validasi($id_surat_masuk)
    {
        $data['surat'] = SuratMasuk::where("id_surat_masuk",$id_surat_masuk)->where('status_surat','aktif')->get();

        return view("dashboard",$data);
    }
}
