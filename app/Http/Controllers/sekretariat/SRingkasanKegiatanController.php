<?php

namespace App\Http\Controllers\sekretariat;

use App\Http\Controllers\Controller;
use App\Models\RingkasanKegiatan;
use Illuminate\Http\Request;

class SRingkasanKegiatanController extends Controller
{
    function index()
    {
        $data['ringkasan_kegiatan'] = RingkasanKegiatan::join('units','units.id_unit','=','ringkasan_kegiatans.id_unit')->where('status_ringkasan','aktif')->get();

        return view("sekretariat/ringkasan_kegiatan", $data);
    }
    function detail_ringkasan($id_ringkasan_kegiatan)
    {
        $data['ringkasan_kegiatan'] = RingkasanKegiatan::join('units','units.id_unit','=','ringkasan_kegiatans.id_unit')->where("id_ringkasan_kegiatan", $id_ringkasan_kegiatan)->first();

        return view("sekretariat/detail_ringkasan", $data);
    }
}
