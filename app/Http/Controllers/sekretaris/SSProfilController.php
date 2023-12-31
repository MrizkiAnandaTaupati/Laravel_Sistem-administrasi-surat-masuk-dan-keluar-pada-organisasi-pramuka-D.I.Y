<?php

namespace App\Http\Controllers\sekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekretaris;

class SSProfilController extends Controller
{
    function index()
    {
        $id_sekretaris = session("id_sekretaris");

        $data['sekretaris'] = Sekretaris::where("id_sekretaris",$id_sekretaris)->first();

        return view("sekretaris/profil", $data);
    }
    function update_profil(Request $request, $id_sekretaris)
    {
        $data['username_sekretaris'] = $request->username_sekretaris;
        $data['nama_sekretaris'] = $request->nama_sekretaris;
        $data['email_sekretaris'] = $request->email_sekretaris;

        if ($request->password_sekretaris)
        {
            $data['password_sekretaris'] = sha1($request->password_sekretaris);
        }

        Sekretaris::find($id_sekretaris)->update($data);

        return redirect('sekretaris/profil');
    }
}
