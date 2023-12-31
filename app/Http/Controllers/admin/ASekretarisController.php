<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Sekretaris;
use Illuminate\Http\Request;

class ASekretarisController extends Controller
{
    function index(){
        //ambil data sekretaris
        $data['sekretaris'] = Sekretaris::where('status_sekretaris','aktif')->get();
        //kembail ke view dengan data
        return view('admin\sekretaris', $data);
    }
    function tambah()
    {
        return view("admin/sekretaris_tambah");
    }
    function simpan_sekretaris(Request $request){
        $request->validate([
            'username' => 'required|unique:sekretaris,username_sekretaris,NULL,id,status_sekretaris,aktif',
            'password' => 'required',
            'nama' => 'required',
            'email' => 'required|unique:sekretaris,email_sekretaris,NULL,id,status_sekretaris,aktif',
        ],[
            'username.required' => 'Username harus diisi.',
            'username.unique' => 'Username sudah ada, silahkan isi username lain',
            'password.required' => 'Password harus diisi.',
            'nama.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.unique' => 'Email sudah ada, silahkan isi username lain',
        ]);
        
        $masuk['username_sekretaris'] = $request->username;
        $masuk['password_sekretaris'] = sha1($request->username);
        $masuk['nama_sekretaris'] = $request->nama;
        $masuk['email_sekretaris'] = $request->email;

        Sekretaris::create($masuk);

        //with pesan dilayar
        return redirect("admin/sekretaris")->with("pesan_sukses","Berhasil Tersimpan");
    }
    function hapus_sekretaris($id_sekretaris){
        $data['status_sekretaris'] = "nonaktif";
        Sekretaris::where("id_sekretaris",$id_sekretaris)->update($data);

        return redirect("admin/sekretaris")->with("pesan_sukses","Berhasil Terhapus");
    }
    function edit($id_sekretaris){

        $data['sekretaris'] = Sekretaris::where("id_sekretaris",$id_sekretaris)->first();

        return view("admin/sekretaris_edit", $data);
    }
    function update_sekretaris(Request $request, $id_sekretaris){
        $request->validate([
            'username' => 'required|unique:sekretaris,username_sekretaris,NULL,id,status_sekretaris,aktif',
            'email' => 'required|unique:sekretaris,email_sekretaris,NULL,id,status_sekretaris,aktif',
        ],[
            'username.required' => 'Username harus diisi.',
            'username.unique' => 'Username sudah ada, silahkan isi username lain',
            'email.required' => 'Email harus diisi.',
            'email.unique' => 'Email sudah ada, silahkan isi username lain',
        ]);

        $username = $request->username;
        $nama = $request->nama;
        $email = $request->email;

        //jika ada password maka enskripsi password
        if ($request->password){
            $ubah['password_sekretaris'] = sha1($request->password);
        } 

        $ubah['username_sekretaris'] = $username;
        $ubah['nama_sekretaris'] = $nama;
        $ubah['email_sekretaris'] = $email;

        Sekretaris::where("id_sekretaris",$id_sekretaris)->update($ubah);

        //with pesan dilayar
        return redirect("admin/sekretaris")->with("pesan_sukses","Berhasil Tersimpan");
    }
}
