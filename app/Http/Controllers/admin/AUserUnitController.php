<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserUnit;
use App\Models\Unit;

class AUserUnitController extends Controller
{
    function index($id_unit)
    {
        $data['id_unit'] = $id_unit;
        $data['user'] = UserUnit::where("status_user","aktif")->where("id_unit",$id_unit)->get();

        return view("admin/user_unit",$data);
    }
    function user_tambah($id_unit)
    {
        $data['unit'] = Unit::where("id_unit",$id_unit)->first();

        return view("admin/user_unit_tambah",$data);
    }

    public function tambah_user(Request $request, $id_unit)
    {
        // Validasi data sebelum ditambahkan
        $request->validate([
            'username_user_unit' => 'required|unique:user_units,username_user,NULL,id,id_unit,' . $id_unit . ',status_user,aktif',
            'email_user_unit' => 'required|email|unique:user_units,email_user,NULL,id,id_unit,' . $id_unit . ',status_user,aktif',
            'password_user_unit' => 'required',
            'nama_user_unit' => 'required',
        ], [
            'username_user_unit.required' => 'Username wajib diisi.',
            'username_user_unit.unique' => 'Username sudah ada, silakan masukkan username lain.',
            'email_user_unit.required' => 'Email wajib diisi.',
            'email_user_unit.email' => 'Format email tidak valid.',
            'email_user_unit.unique' => 'Email sudah ada, silakan pilih email lain.',
            'password_user_unit.required' => 'Password wajib diisi.',
            'nama_user_unit.required' => 'Nama wajib diisi.',
        ]);
    
        // Proses penyimpanan data jika validasi berhasil
        $data = [
            'id_unit' => $id_unit,
            'username_user' => $request->username_user_unit,
            'password_user' => sha1($request->password_user_unit),
            'nama_user' => $request->nama_user_unit,
            'email_user' => $request->email_user_unit,
            'status_user' => 'aktif',
        ];
    
        // Cek apakah data sudah ada
        $existingUser = UserUnit::where('id_unit', $id_unit)
            ->where('username_user', $request->username_user_unit)
            ->where('status_user', 'aktif')
            ->first();
    
        if ($existingUser) {
            // Data sudah ada, tampilkan pesan error
            return redirect("admin/user_unit/tambah_user/{$id_unit}")
                ->withInput()
                ->withErrors(['username_user_unit' => 'Username sudah terdaftar.']);
        }
    
        // Cek apakah email sudah terdaftar
        $existingEmail = UserUnit::where('id_unit', $id_unit)
            ->where('email_user', $request->email_user_unit)
            ->where('status_user', 'aktif')
            ->first();
    
        if ($existingEmail) {
            // Email sudah ada, tampilkan pesan error
            return redirect("admin/user_unit/tambah_user/{$id_unit}")
                ->withInput()
                ->withErrors(['email_user_unit' => 'Email sudah terdaftar.']);
        }
    
        // Simpan data
        UserUnit::create($data);
    
        // Redirect dengan pesan sukses
        return redirect("admin/user_unit/{$id_unit}")->with('success', 'User berhasil ditambahkan.');
    }  
    
    function user_ubah($id_unit,$id_user_unit)
    {
        $data['unit'] = Unit::all();
        $data['id_unit'] = $id_unit;
        $data['uu'] = UserUnit::where("id_user_unit",$id_user_unit)->first();

        return view("admin/user_unit_ubah", $data);
    }
    function ubah_user(Request $request,$id_unit,$id_user_unit)
    {
        // Validasi data sebelum ditambahkan
        $request->validate([
            'username_user_unit' => 'required|unique:user_units,username_user,NULL,id,id_unit,' . $id_unit . ',status_user,aktif',
            'email_user_unit' => 'required|email|unique:user_units,email_user,NULL,id,id_unit,' . $id_unit . ',status_user,aktif',
            'nama_user_unit' => 'required',
        ], [
            'username_user_unit.required' => 'Username wajib diisi.',
            'username_user_unit.unique' => 'Username sudah ada, silakan masukkan username lain.',
            'email_user_unit.required' => 'Email wajib diisi.',
            'email_user_unit.email' => 'Format email tidak valid.',
            'email_user_unit.unique' => 'Email sudah ada, silakan pilih email lain.',
            'nama_user_unit.required' => 'Nama wajib diisi.',
        ]);

        if ($request->password_user_unit)
        {
            $data['password_user'] = sha1($request->password_user_unit);
        }
        $data['id_unit'] = $id_unit;
        $data['username_user'] = $request->username_user_unit;
        $data['nama_user'] = $request->nama_user_unit;
        $data['email_user'] = $request->email_user_unit;
        $data['status_user'] = 'aktif';
         // Cek apakah data sudah ada
         $existingUser = UserUnit::where('id_unit', $id_unit)
         ->where('username_user', $request->username_user_unit)
         ->where('status_user', 'aktif')
         ->first();
 
        if ($existingUser) {
            // Data sudah ada, tampilkan pesan error
            return redirect("admin/user_unit/tambah_user/{$id_unit}")
                ->withInput()
                ->withErrors(['username_user_unit' => 'Username sudah terdaftar.']);
        }
    
        // Cek apakah email sudah terdaftar
        $existingEmail = UserUnit::where('id_unit', $id_unit)
            ->where('email_user', $request->email_user_unit)
            ->where('status_user', 'aktif')
            ->first();
    
        if ($existingEmail) {
            // Email sudah ada, tampilkan pesan error
            return redirect("admin/user_unit/tambah_user/{$id_unit}")
                ->withInput()
                ->withErrors(['email_user_unit' => 'Email sudah terdaftar.']);
        }

        UserUnit::where("id_user_unit",$id_user_unit)->update($data);

        return redirect("admin/user_unit/".$id_unit);
    }
    function hapus_user(Request $request,$id_unit,$id_user_unit)
    {
        $data["status_user"] = "nonaktif";

        UserUnit::where("id_user_unit",$id_user_unit)->update($data);
        return redirect("admin/user_unit/".$id_unit);
    }

}
