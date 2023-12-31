<?php

namespace App\Http\Controllers\sekretaris;

use App\Http\Controllers\Controller;
use App\Models\Disposisi;
use App\Models\SuratMasuk;
use App\Models\Unit;
use Illuminate\Http\Request;

class SSSuratMasukController extends Controller
{
    function index ()
    {
        $data['surat'] = SuratMasuk::where("status_surat","aktif")->get();

        return view("sekretaris/surat_masuk", $data);
    }

    function disposisi_surat_masuk($id_surat_masuk)
    {
        $data['unit'] = Unit::where("status_unit","aktif")->get();
        $data['surat_m'] = SuratMasuk::where('id_surat_masuk', $id_surat_masuk)->first();
        $data['surat'] = Disposisi::join("surat_masuks","surat_masuks.id_surat_masuk","=","disposisis.id_surat_masuk")->join("units","units.id_unit","=","disposisis.id_unit")->where("status","aktif")->where("disposisis.id_surat_masuk",$id_surat_masuk)->orderBy('id_disposisi','DESC')->first(); 

        return view("sekretaris/disposisi_surat_masuk", $data);
    }

    function tambah_disposisi(Request $request,$id_surat_masuk)
    {
        $data['id_surat_masuk'] = $id_surat_masuk;
        $data['id_unit'] = $request->id_unit;
        $data['catatan_disposisi'] = $request->catatan_disposisi;
        $data['status'] = "aktif";
        $data2['posisi_surat'] = "disposisi";
        

        SuratMasuk::where('id_surat_masuk',$id_surat_masuk)->update($data2);
        Disposisi::create($data);

        return redirect("sekretaris/surat_masuk/disposisi_surat_masuk/".$id_surat_masuk);
    }
}
