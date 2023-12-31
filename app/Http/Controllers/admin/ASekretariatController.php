<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekretariat;

class ASekretariatController extends Controller
{
    function index() 
    {
        // Mengambil data dari tabel sekretariat
        $data['sekretariat'] = Sekretariat::where('status_sekretariat','aktif')->get();

        //mengarahkan ke halaman view beserta data yang sudah diambil ke halaman view
        return view("admin/sekretariat",$data);
    }

    function tambah()
    {
        return view("admin/sekretariat_tambah");
    }

    function simpan_sekretariat(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:sekretariats,username_sekretariat,NULL,id,status_sekretariat,aktif',
            'password' => 'required',
            'email' => 'required|unique:sekretariats,email_sekretariat,NULL,id,status_sekretariat,aktif',
        ],[
            'nama.required' => 'Nama harus diisi.',
            'username.required' => 'Username harus diisi.',
            'username.unique' => 'Username sudah ada, silahkan isi username lain',
            'password.required' => 'Password harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.unique' => 'Email sudah ada, silahkan isi username lain',
        ]);

        $masuk['nama_sekretariat'] = $request->nama;
        $masuk['username_sekretariat'] = $request->username;
        $masuk['password_sekretariat'] = sha1($request->password);
        $masuk['email_sekretariat'] = $request->email;
        $masuk['status_sekretariat'] = 'aktif';

        Sekretariat::create($masuk);
        return redirect('admin/sekretariat');
    }

    function hapus_sekretariat($id_sekretariat)
    {
        $data['status_sekretariat'] = 'nonaktif';
        Sekretariat::where("id_sekretariat",$id_sekretariat)->update($data);

        return redirect('admin/sekretariat')->with("pesan_sukses","Berhasil Terhapus");
    }

    function edit($id_sekretariat)
    {
        $data['sekretariat'] = Sekretariat::where("id_sekretariat",$id_sekretariat)->first();
        
        return view("admin/sekretariat_edit",$data);
    }

    function update_sekretariat(Request $request, $id_sekretariat) 
    {
        $request->validate([
            'username' => 'required|unique:sekretariats,username_sekretariat,NULL,id,status_sekretariat,aktif',
            'email' => 'required|unique:sekretariats,email_sekretariat,NULL,id,status_sekretariat,aktif',
        ],[
            'username.required' => 'Username harus diisi.',
            'username.unique' => 'Username sudah ada, silahkan isi username lain',
            'email.required' => 'Email harus diisi.',
            'email.unique' => 'Email sudah ada, silahkan isi username lain',
        ]);
        
        $nama = $request->nama;
        $username = $request->username;
        $email = $request->email;

        //jika ada password maka enkripsi password
            if ($request->password) {
                $ubah['password_sekretariat'] = sha1($request->password);
            }

            $ubah['nama_sekretariat'] = $nama;
            $ubah['username_sekretariat'] = $username;
            $ubah['email_sekretariat'] = $email;

            Sekretariat::where("id_sekretariat",$id_sekretariat)->update($ubah);

            return redirect('admin/sekretariat')->with("pesan_sukses","Berhasil Ubah");

    }


}
