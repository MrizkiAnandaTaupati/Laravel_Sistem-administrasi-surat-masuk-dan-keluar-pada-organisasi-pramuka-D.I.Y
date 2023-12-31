<?php

namespace App\Http\Controllers\sekretariat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Models\Unit;


class SSuratKeluarController extends Controller
{
    function index()
    {
        $data['surat'] = SuratKeluar::join("units","units.id_unit","=","surat_keluars.id_unit")->where('kelas','aktif')->orderBy('no_surat','DESC')->get();

        return view('sekretariat/surat_keluar', $data);
    }
    function detail_surat($no_surat)
    {
        $data['surat'] = SuratKeluar::join("units","units.id_unit","=","surat_keluars.id_unit")->where('no_surat', $no_surat)->first();

        return view('sekretariat/detail_surat_keluar', $data);
    }
    function tambah_surat()
    {
        $data['unit']= Unit::where("status_unit","aktif")->get();
        return view("sekretariat/surat_keluar_tambah",$data);
    }

    function surat_tambah(Request $request)
    {

        $lastSurat = SuratKeluar::orderBy('no_surat','DESC')->first();
        $no = $lastSurat->no_surat;
        $no_surat = $no + 1;
        $data['no_surat'] = $no_surat;
        $data['jenis_surat'] = $request->jenis_surat;
        $data['sifat_surat'] = $request->sifat_surat;
        $data['id_unit'] = $request->id_unit;
        $data['tujuan'] = $request->tujuan;
        $data['perihal'] = $request->perihal;
        $data['isi_surat'] = $request->isi_surat;
        $data['tanggal'] = $request->tanggal;
        $data['status_surat'] = 'Diolah';
        $data['kelas'] = "aktif";

        SuratKeluar::create($data);
        return redirect("sekretariat/surat_keluar/");
    }

    function surat_ubah($no_surat)
    {
        $data['surat'] = SuratKeluar::where("no_surat",$no_surat)->first();
        $data['unit'] = Unit::where("status_unit","aktif")->get();

        return view("sekretariat/surat_keluar_ubah",$data);
    }

    function ubah_surat(Request $request,$no_surat)
    {
        $data['jenis_surat'] = $request->jenis_surat;
        $data['sifat_surat'] = $request->sifat_surat;
        $data['id_unit'] = $request->id_unit;
        $data['tujuan'] = $request->tujuan;
        $data['perihal'] = $request->perihal;
        $data['isi_surat'] = $request->isi_surat;
        $data['tanggal'] = $request->tanggal;
        $data['kelas'] = "aktif";

        SuratKeluar::where('no_surat',$no_surat)->update($data);

        return redirect("sekretariat/surat_keluar");
    }

    function hapus_surat(Request $request,$no_surat)
    {
        $data['kelas'] = "nonaktif";

        SuratKeluar::where("no_surat",$no_surat)->update($data);

        return redirect("sekretariat/surat_keluar");
    }
    function cetak_surat($no_surat)
    {
        $data['surat'] = SuratKeluar::join('units','units.id_unit','=','surat_keluars.id_unit')->where("no_surat",$no_surat)->first();

        return view("sekretariat/file_surat_keluar",$data);
    }
}
