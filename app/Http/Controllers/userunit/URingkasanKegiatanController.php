<?php

namespace App\Http\Controllers\userunit;

use App\Http\Controllers\Controller;
use App\Models\RingkasanKegiatan;
use App\Models\Unit;
use Illuminate\Http\Request;

class URingkasanKegiatanController extends Controller
{
    function index()
    {
        $data['ringkasan_kegiatan'] = RingkasanKegiatan::join('units','units.id_unit','=','ringkasan_kegiatans.id_unit')->where("status_ringkasan","aktif")->where('ringkasan_kegiatans.id_unit',session('id_unit'))->get();

        return view("userunit/ringkasan_kegiatan", $data);
    }
   
    function detail_ringkasan($id_ringkasan_kegiatan)
    {
        $data['ringkasan_kegiatan'] = RingkasanKegiatan::join('units','units.id_unit','=','ringkasan_kegiatans.id_unit')->first();

        return view("userunit/detail_ringkasan",$data);
    }

    function tambah_ringkasan()
    {
        $data['unit'] = Unit::where("status_unit","aktif")->get();

        return view("userunit/ringkasan_tambah",$data);
    }

    function ringkasan_tambah(Request $request)
    {
        $data['ringkasan_kegiatan'] = RingkasanKegiatan::join('units','units.id_unit','=','ringkasan_kegiatans.id_unit')->where("status_ringkasan","aktif")->get();

        $data['id_unit'] = $request->unit;
        $data['nama_kegiatan'] = $request->nama_kegiatan;
        $data['tanggal_kegiatan'] = $request->tanggal_kegiatan;
        $data['waktu'] = $request->waktu;
        $data['tempat'] = $request->tempat;
        $data['isi'] = $request->isi;
        $data['status_ringkasan'] = "aktif";

        RingkasanKegiatan::create($data);

        return redirect("userunit/ringkasan_kegiatan");
    }

    function ubah_ringkasan($id_ringkasan_kegiatan)
    {
        $data['unit'] = Unit::where("status_unit","aktif")->get();

        $data['ringkasan_kegiatan'] = RingkasanKegiatan::where("id_ringkasan_kegiatan",$id_ringkasan_kegiatan)->first();
        
        return view("userunit/ringkasan_ubah",$data);
    }

    function ringkasan_ubah(Request $request, $id_ringkasan_kegiatan)
    {
    $data['id_unit'] = $request->unit;
    $data['nama_kegiatan'] = $request->nama_kegiatan;
    $data['tanggal_kegiatan'] = $request->tanggal_kegiatan;
    $data['waktu'] = $request->waktu;
    $data['tempat'] = $request->tempat;
    $data['isi'] = $request->isi;
    $data['status_ringkasan'] = "aktif";

    // Perbarui informasi unit pada ringkasan kegiatan
    RingkasanKegiatan::where("id_ringkasan_kegiatan", $id_ringkasan_kegiatan)->update($data);

    return redirect("userunit/ringkasan_kegiatan");
    }

    function hapus_ringkasan(Request $request, $id_ringkasan_kegiatan)
    {
        $data['status_ringkasan'] = "nonaktif";

        RingkasanKegiatan::where("id_ringkasan_kegiatan",$id_ringkasan_kegiatan)->update($data);

        return redirect("userunit/ringkasan_kegiatan");
    }
    
}
