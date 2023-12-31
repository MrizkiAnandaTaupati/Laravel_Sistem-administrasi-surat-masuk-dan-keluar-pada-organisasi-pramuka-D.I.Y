<?php

namespace App\Http\Controllers\sekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratKeluar;

class SSSuratKeluarController extends Controller
{
    function index()
    {
        $data['surat'] = SuratKeluar::join('units','units.id_unit','=','surat_keluars.id_unit')->where('kelas','aktif')->orderBy('no_surat','DESC')->get();

        return view("sekretaris/surat_keluar", $data);
    }
    function alasan_ditolak($no_surat)
    {
        $data['surat'] = SuratKeluar::join('units','units.id_unit','=','surat_keluars.id_unit')->where('no_surat',$no_surat)->first();

        return view("sekretaris/alasan_ditolak", $data);
    }
    function alasan_ditolak_tambah(Request $request, $no_surat)
    {
        $data['alasan_ditolak'] = $request->alasan_ditolak;

        SuratKeluar::where("no_surat",$no_surat)->update($data);

        return redirect("sekretaris/surat_keluar");
    }
    function alasan_ditolak_tampil($no_surat)
    {
        $data['surat'] = SuratKeluar::join('units','units.id_unit','=','surat_keluars.id_unit')->where('no_surat',$no_surat)->first();

        return view("sekretaris/alasan_ditolak_tampil",$data);
    }
    function detail_surat($no_surat)
    {
        $data['surat'] = SuratKeluar::join('units','units.id_unit','=','surat_keluars.id_unit')->where('no_surat',$no_surat)->first();

        return view("sekretaris/detail_surat_keluar",$data);
    }
    function ubah_status_surat(Request $request,$no_surat)
    {
        $data['status_surat'] = $request->status_surat;

        SuratKeluar::where('no_surat',$no_surat)->update($data);

        return redirect("sekretaris/surat_keluar");
    }
    function cetak_surat($no_surat)
    {
        $data['surat'] = SuratKeluar::join('units','units.id_unit','=','surat_keluars.id_unit')->where("no_surat",$no_surat)->first();

        return view("sekretariat/file_surat_keluar",$data);
    }
}
