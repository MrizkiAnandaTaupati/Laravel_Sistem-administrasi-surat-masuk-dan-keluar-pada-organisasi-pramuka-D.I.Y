<?php

namespace App\Http\Controllers\admin;

use App\Models\SuratMasuk;
use App\Models\Disposisi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ASuratMasukController extends Controller
{
    function index()
    {
        $data['surat'] = SuratMasuk::where("status_surat","aktif")->orderBy('no_surat','DESC')->get();

        return view('admin/surat_masuk', $data);
    }
    function detail_surat($id_surat_masuk)
    {
        $data['disposisi'] = Disposisi::join("units","units.id_unit","=","disposisis.id_unit")->where('id_surat_masuk',$id_surat_masuk)->first();
        $data['surat'] = SuratMasuk::where("id_surat_masuk",$id_surat_masuk)->first();

        return view("admin/detail_surat_masuk",$data);
    }
}
