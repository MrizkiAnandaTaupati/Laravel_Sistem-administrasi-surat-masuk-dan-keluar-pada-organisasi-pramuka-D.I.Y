<?php

namespace App\Http\Controllers\userunit;

use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use App\Models\Unit;
use Illuminate\Http\Request;

class USuratKeluarController extends Controller
{
    function index()
    {
        $data['surat'] = SuratKeluar::join("units","units.id_unit","=","surat_keluars.id_unit")->where('kelas','aktif')->orderBy('no_surat','DESC')->get();

        return view("userunit/surat_keluar",$data);
    }

    function detail_surat_keluar($no_surat)
    {
        $data['surat'] = SuratKeluar::join('units','units.id_unit','=','surat_keluars.id_unit')->where('no_surat',$no_surat)->first();

        return view("userunit/detail_surat_keluar",$data);
    }
}
