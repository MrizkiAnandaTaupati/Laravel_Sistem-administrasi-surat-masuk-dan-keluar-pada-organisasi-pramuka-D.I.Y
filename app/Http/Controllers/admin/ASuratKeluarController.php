<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Models\Unit;

class ASuratKeluarController extends Controller
{
    function index()
    {
        $data['surat'] = SuratKeluar::join("units","units.id_unit","=","surat_keluars.id_unit")->where('kelas','aktif')->orderBy('no_surat','DESC')->get();

        return view('admin/surat_keluar', $data);
    }
    function detail_surat($no_surat)
    {
        $data['surat'] = SuratKeluar::join("units","units.id_unit","=","surat_keluars.id_unit")->where('no_surat', $no_surat)->first();

        return view('admin/detail_surat_keluar', $data);
    }
}
