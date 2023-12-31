<?php

namespace App\Http\Controllers\sekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use App\Models\Unit;

class SSDashboardController extends Controller
{
    function index()
    {
        $data['masuk'] = SuratMasuk::where('status_surat','aktif')->count();
        $data['keluar'] = SuratKeluar::where('kelas','aktif')->count();
        $data['unit'] = Unit::where('status_unit','aktif')->count();

        return view("sekretaris\dashboard",$data);
    }
}
