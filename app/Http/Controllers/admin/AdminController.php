<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        //abil data dari tabel admin
        $data['admin'] = Admin::where('status_admin','aktif')->get();

        //kirim data yg sudah di ambil ke view admin
        return view("admin/admin",$data);
    }

    function tambah_admin(){
        return view('admin/admin_tambah');
    }

    function logout(Request $request){
        $request->session()->forget(["id_admin","username_admin","password_admin","nama_admin"]);
        $request->session()->flush();

        return redirect('/login');
    }

    function admin_tambah(Request $request){

        $request->validate([
            'username_admin' => 'required|unique:admins,username_admin,NULL,id,status_admin,aktif',
            'password_admin' => 'required',
            'nama_admin' => 'required',
        ],[
            'username_admin.required' => 'Username harus diisi.',
            'username_admin.unique' => 'Username sudah ada, silahkan isi username lain',
            'password_admin.required' => 'Password harus diisi.',
            'nama_admin.required' => 'Nama harus diisi.',
        ]);
        //mendapatkan data yang diketik di formulir
        $data['username_admin'] = $request->username_admin;
        $data['password_admin'] = sha1($request->password_admin);
        $data['nama_admin'] = $request->nama_admin;
        $data['status_admin'] = 'aktif';

        //memasukan data yg sudah diinputkan ke dalam database
        Admin::create($data);

        return redirect("admin");
    }

    function destroy($id_admin){

        //perintah hapus data
        //hapus data dari tabel admin yang od_admin = $id_admin
        //delete from admin where id_admin='1' -> perintah sql
        $data ['status_admin'] = 'nonaktif';
        Admin::where('id_admin',$id_admin)->update($data);

        return redirect("admin");
    }

    function ubah_admin($id_admin){

        $data['admin'] = Admin::find($id_admin);

        return view("admin/ubah_admin",$data);
    }

    function admin_ubah(Request $request, $id_admin){

        $request->validate([
            'username_admin' => 'required|unique:admins,username_admin,NULL,id,status_admin,aktif',
        ],[
            'username_admin.required' => 'Username harus diisi.',
            'username_admin.unique' => 'Username sudah ada, silahkan isi username lain',
        ]);
        
        if ($request->password_admin) {
            $edit['password_admin'] = sha1($request->password_admin);
        }

        $edit['username_admin'] = $request->username_admin;
        $edit['nama_admin'] = $request->nama_admin;

        Admin::find($id_admin)->update($edit);

        return redirect("admin/");
    }
}
