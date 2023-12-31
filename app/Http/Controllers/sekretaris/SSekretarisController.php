<?php

namespace App\Http\Controllers\sekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SSekretarisController extends Controller
{
    function logout(Request $request){
        $request->session()->forget(["id_sekretaris","username_sekretaris","password_sekretaris","nama_sekretaris","email_sekretaris"]);
        $request->session()->flush();

        return redirect('/login');
    }
}
