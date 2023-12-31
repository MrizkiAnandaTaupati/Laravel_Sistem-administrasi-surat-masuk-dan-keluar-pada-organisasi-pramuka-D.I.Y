<?php

namespace App\Http\Controllers\userunit;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;
use App\Models\Disposisi;
use Illuminate\Http\Request;

class USuratMasukController extends Controller
{
    function index()
    {
        $data['surat'] = SuratMasuk::where("status_surat","aktif")->get();

        return view("userunit/surat_masuk",$data);
    }
    
    function detail_surat_masuk($id_surat_masuk)
    {
        $data['disposisi'] = Disposisi::join("units","units.id_unit","=","disposisis.id_unit")->where('id_surat_masuk',$id_surat_masuk)->first();
        $data['surat'] = SuratMasuk::where("id_surat_masuk",$id_surat_masuk)->first();

        return view("userunit/detail_surat_masuk",$data);
    }
}
