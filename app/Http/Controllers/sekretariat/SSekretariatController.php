<?php

namespace App\Http\Controllers\sekretariat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SSekretariatController extends Controller
{
    function logout(Request $request){
        $request->session()->forget(["id_sekretariat","username_sekretariat","password_sekretariat","nama_sekretariat","email_sekretariat"]);
        $request->session()->flush();

        return redirect('/login');
    }
}
