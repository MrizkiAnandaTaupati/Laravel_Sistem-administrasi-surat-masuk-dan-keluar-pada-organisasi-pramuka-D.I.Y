<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RingkasanKegiatan;

class ARingkasanKegiatanController extends Controller
{
    function index()
    {
        $data['ringkasan_kegiatan'] = RingkasanKegiatan::join('units','units.id_unit','=','ringkasan_kegiatans.id_unit')->where('status_ringkasan','aktif')->get();

        return view("admin/ringkasan_kegiatan", $data);
    }
    function detail_ringkasan($id_ringkasan_kegiatan)
    {
        $data['ringkasan_kegiatan'] = RingkasanKegiatan::join('units','units.id_unit','=','ringkasan_kegiatans.id_unit')->where('id_ringkasan_kegiatan',$id_ringkasan_kegiatan)->first();

        return view("admin/detail_ringkasan",$data);
    }
}