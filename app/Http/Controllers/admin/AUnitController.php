<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;
use Illuminate\Validation\ValidationException;
    

class AUnitController extends Controller
{
    function index()
    {
        $data['unit'] = Unit::where('status_unit','aktif')->orderBY('kode_unit')->get();

        return view('admin/unit', $data);
    }
    function unit_tambah()
    {
        return view('admin/unit_tambah');
    }

    public function tambah_unit(Request $request)
    {
        try {
            // Ambil semua unit dengan status 'aktif'
            $data['unit'] = Unit::where('status_unit', 'aktif')->get();
    
            // Validasi data sebelum ditambahkan
            $request->validate([
                'tipe_unit' => 'required',
                'nama_unit' => 'required|unique:units,nama_unit,NULL,id,status_unit,aktif', // Memastikan nama_unit bersifat unik untuk unit dengan status aktif
                'kode_unit' => 'required|unique:units,kode_unit,NULL,id,status_unit,aktif', // Memastikan kode_unit bersifat unik untuk unit dengan status aktif
            ], [
                'tipe_unit.required' => 'Tipe unit harus diisi.',
                'nama_unit.required' => 'Nama unit harus diisi.',
                'nama_unit.unique' => 'Nama unit sudah ada, silakan isi nama unit lain.',
                'kode_unit.required' => 'Kode unit harus diisi.',
                'kode_unit.unique' => 'Kode unit sudah ada, silakan isi kode unit lain.',
            ]);
    
            // Jika validasi berhasil, lanjutkan dengan menambahkan unit
            $data['tipe_unit'] = $request->tipe_unit;
            $data['nama_unit'] = $request->nama_unit;
            $data['kode_unit'] = $request->kode_unit;
            $data['status_unit'] = 'aktif';
    
            // Menggunakan create untuk menambahkan data baru
            Unit::create($data);
    
            return redirect('admin/unit');
        } catch (ValidationException $e) {
            // Tangkap pengecualian dan tambahkan pesan error khusus
            return redirect('admin/unit_tambah')->withErrors($e->errors())->withInput();
        }
    }
    
    function unit_ubah($id_unit)
    {
        $data['unit'] = Unit::where("id_unit",$id_unit)->first();

        return view('admin/unit_ubah', $data);
    }
    function ubah_unit(Request $request,$id_unit)
    {

        try {
            // Validasi data sebelum ditambahkan
            $request->validate([
                'tipe_unit' => 'required',
                'nama_unit' => 'required|unique:units,nama_unit,NULL,id,status_unit,aktif', // Memastikan nama_unit bersifat unik untuk unit dengan status aktif
                'kode_unit' => 'required|unique:units,kode_unit,NULL,id,status_unit,aktif', // Memastikan kode_unit bersifat unik untuk unit dengan status aktif
            ], [
                'tipe_unit.required' => 'Tipe unit harus diisi.',
                'nama_unit.required' => 'Nama unit harus diisi.',
                'nama_unit.unique' => 'Nama unit sudah ada, silakan isi nama unit lain.',
                'kode_unit.required' => 'Kode unit harus diisi.',
                'kode_unit.unique' => 'Kode unit sudah ada, silakan isi kode unit lain.',
            ]);
                // Jika validasi berhasil, lanjutkan dengan menambahkan unit
                $data['tipe_unit'] = $request->tipe_unit;
                $data['nama_unit'] = $request->nama_unit;
                $data['kode_unit'] = $request->kode_unit;
                $data['status_unit'] = 'aktif';
        
                // Menggunakan firstOrCreate untuk memastikan data unik
                Unit::where('id_unit',$id_unit)->update($data);
        
                return redirect('admin/unit');
            } catch (ValidationException $e) {
                // Tangkap pengecualian dan tambahkan pesan error khusus
                return redirect()->back()->withErrors($e->errors())->withInput();
            }
    }
    function hapus_unit(Request $request,$id_unit)
    {
        $data['status_unit'] = "nonaktif";
        Unit::where("id_unit",$id_unit)->update($data);

        return redirect("admin/unit");
    }
}
