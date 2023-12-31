<?php

namespace App\Http\Controllers\sekretariat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekretariat;

class SProfilController extends Controller
{
    function index()
    {
        $id_sekretariat = session("id_sekretariat");

        $data['sekretariat'] = Sekretariat::where("id_sekretariat",$id_sekretariat)->first();

        return view("sekretariat/profil", $data);
    }
    function update_profil(Request $request, $id_sekretariat)
    {
        $data['username_sekretariat'] = $request->username_sekretariat;
        $data['nama_sekretariat'] = $request->nama_sekretariat;
        $data['email_sekretariat'] = $request->email_sekretariat;

        if ($request->password_sekretariat)
        {
            $data['password'] = sha1($request->password_sekretariat);
        }

        Sekretariat::find($id_sekretariat)->update($data);

        return redirect('sekretariat/profil');
    }
}
