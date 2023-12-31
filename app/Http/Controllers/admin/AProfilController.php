<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AProfilController extends Controller
{
    function index()
    {
        //mengambil data id_admin dari session
        $id_admin = session("id_admin");

        //menampilkan data admin berdasarkan id_pelogin
        $data['admin'] = Admin::where("id_admin", $id_admin)->first();

        return view("admin/profil", $data);
    }
    function update_profil(Request $request, $id_admin)
    {
        $data['username_admin'] = $request->username_admin;
        $data['nama_admin'] = $request->nama_admin;

        //jika menginput data password maka
        if ($request->password_admin)
        {
            $data['password_admin'] = sha1($request->password_admin);
        }

        Admin::find($id_admin)->update($data);

        return redirect("admin/profil");
    }
}
