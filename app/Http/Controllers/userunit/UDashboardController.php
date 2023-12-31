<?php

namespace App\Http\Controllers\userunit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserUnit;
use App\Models\Unit;
use App\Models\SuratMasuk;
use App\Models\Suratkeluar;


class UDashboardController extends Controller
{
    function index()
    {
        $data['masuk'] = SuratMasuk::where('status_surat','aktif')->count();
        $data['keluar'] = SuratKeluar::where('kelas','aktif')->count();
        $data['unit'] = Unit::where('status_unit','aktif')->count();

        return view("userunit/dashboard",$data);
    }
    function profile()
    {
        $data['user'] = UserUnit::join("units","units.id_unit","=","user_units.id_unit")
        ->where("id_user_unit",session("id_user_unit"))->first();

        return view("userunit/profile",$data);
    }
    function update_profile(Request $request,$id_user_unit)
    {
        $data['username_user'] = $request->username_user;
        $data['nama_user'] = $request->nama_user;
        $data['email_user'] = $request->email_user;

        if ($request->password_user)
        {
            $data['password_user'] = sha1($request->password_user);
        }

        UserUnit::find($id_user_unit)->update($data);

        return redirect('userunit/profil')->with("update_berhasil","Profil Berhasil diubah.");        
    }
}
