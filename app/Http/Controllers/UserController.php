<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;

class UserController extends Controller
{
    // function index(){
    //     return view("dashboard");
    // }
    function dashboard_tracking($id_surat)
    {
        $data['surat'] = SuratMasuk::where("id_surat_masuk",$id_surat)->first();
        return view('/dashboard_tracking',$data);
    }
}
