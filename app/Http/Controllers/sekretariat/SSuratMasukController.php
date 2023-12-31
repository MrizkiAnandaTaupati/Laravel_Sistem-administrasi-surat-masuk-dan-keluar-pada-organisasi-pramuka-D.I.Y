<?php

namespace App\Http\Controllers\sekretariat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\Disposisi;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SSuratMasukController extends Controller
{
    function index ()
    {
        $surat = SuratMasuk::where("status_surat","aktif")->orderBy('id_surat_masuk','DESC')->get();
        $output = array();
        foreach ($surat as $key => $persurat) {
           $id_surat_masuk = $persurat->id_surat;
           $isi = url('dashboard_tracking'.$id_surat_masuk);
           $persurat->qrcode_surat = QrCode::generate($isi);
           $output[] = $persurat;
       }
       $data['surat'] = $output;
   
       return view("sekretariat/surat_masuk", $data);
    }
    function detail_surat($id_surat_masuk)
    {
        $data['disposisi'] = Disposisi::join("units","units.id_unit","=","disposisis.id_unit")->where('id_surat_masuk',$id_surat_masuk)->first();
        $data['surat'] = SuratMasuk::where('id_surat_masuk', $id_surat_masuk)->first();

        return view('sekretariat/detail_surat_masuk', $data);
    }
    function tambah_surat()
    {
        return view("sekretariat/surat_masuk_tambah");
    }
    function surat_tambah(Request $request)
    {
        //mendapatkan nama file yang diinput menggunakan getClientOriginalName()
        $file = $request->file_surat_masuk->getClientOriginalName();
        //memasukan file yg dimasukan di form ke folder file_surat
        $request->file_surat_masuk->move("file_surat",$file);
        $data["file_surat_masuk"] = $file;

        $data['no_surat'] = $request->no_surat;
        $data['klasifikasi'] = $request->klasifikasi_surat;
        $data['sifat_surat'] = $request->sifat_surat;
        $data['asal_surat'] = $request->asal_surat;
        $data['tanggal'] = $request->tanggal;
        $data['lampiran'] = $request->lampiran;
        $data['perihal'] = $request->perihal;
        $data['posisi_surat'] = "tercatat";
        $data['status_surat'] = "aktif";

        SuratMasuk::create($data);
        return redirect("sekretariat/surat_masuk/");
    }
    function surat_ubah($id_surat_masuk)
    {
        $data['surat'] = SuratMasuk::where("id_surat_masuk",$id_surat_masuk)->first();

        return view("sekretariat/surat_masuk_ubah",$data);
    }
    function ubah_surat(Request $request, $id_surat_masuk)
    {

        if ($request->file_surat_masuk)
            {
                //mendapatkan nama file yang diinput menggunakan getClientOriginalName()
                $file = $request->file_surat_masuk->getClientOriginalName();
                //memasukan file yg dimasukan di form ke folder file_surat
                $request->file_surat_masuk->move("file_surat",$file);
                $data["file_surat_masuk"] = $file;
            }

            $data['no_surat'] = $request->no_surat;
            $data['klasifikasi'] = $request->klasifikasi_surat;
            $data['sifat_surat'] = $request->sifat_surat;
            $data['asal_surat'] = $request->asal_surat;
            $data['tanggal'] = $request->tanggal;
            $data['lampiran'] = $request->lampiran;
            $data['perihal'] = $request->perihal;
            $data['status_surat'] = "aktif";

            SuratMasuk::where("id_surat_masuk",$id_surat_masuk)->update($data);

            return redirect("sekretariat/surat_masuk");
    }
    function hapus_surat(Request $request, $id_surat_masuk)
    {
        $data['status_surat'] = "nonaktif";
        SuratMasuk::where("id_surat_masuk ",$id_surat_masuk)->update($data);

        return redirect("sekretariat/surat_masuk");
    }
    function cetak_qr($id_surat_masuk)
    {
        $data ['surat'] = SuratMasuk::where('id_surat_masuk', $id_surat_masuk)->first();

        $isi = url('dashboard_tracking/'.$id_surat_masuk);
        $qrcode = QrCode::size(200)->generate($isi);

        return view("sekretariat/file_cetak_qr", compact('qrcode'), $data);
    }

    
}
