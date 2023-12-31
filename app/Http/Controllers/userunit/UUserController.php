<?php

namespace App\Http\Controllers\userunit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserUnit;

class UUserController extends Controller
{
    function logout(Request $request){
        $request->session()->forget(["id_user_unit","username_user","password_user","nama_user","email_user"]);
        $request->session()->flush();

        return redirect('/login');
    }
}
