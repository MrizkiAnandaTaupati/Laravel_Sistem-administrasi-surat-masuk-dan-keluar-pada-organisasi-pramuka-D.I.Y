<?php

namespace App\Http\Controllers\sekretariat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\Unit;
use App\Models\Disposisi;

class SDashboardController extends Controller
{
    function index()
    {
        $data['masuk'] = SuratMasuk::where("status_surat","aktif")->count();
        $data['keluar'] = SuratKeluar::where("kelas","aktif")->count();
        $data['unit'] = Unit::where('status_unit','aktif')->count();

        return view("sekretariat\dashboard",$data);
    }

    function laporan_surat_masuk()
    {
        $mulai = '2020-01-01';
        $selesai = date('Y-m-d');
        $id_unit_tertentu = 'id_unit';
        $unit = Unit::where('status_unit','aktif')->get();

        $surat_masuk = Disposisi::join('surat_masuks', 'surat_masuks.id_surat_masuk', '=', 'disposisis.id_surat_masuk')->join('units', 'units.id_unit', '=', 'disposisis.id_unit')->whereBetween('tanggal', array($mulai, $selesai))->where('status_surat', 'aktif');
        if (!empty($id_unit_tertentu)) {
            $surat_masuk->where('disposisis.id_unit', $id_unit_tertentu);
        }

        $data['surat_masuk'] = $surat_masuk->get();   
        $data['mulai'] = $mulai;
        $data['selesai'] = $selesai;
        $data['unit'] = $unit;
    
        return view("sekretariat/laporan_surat_masuk", $data);
    }
    
    function laporan_surat_masuk_filter(Request $request)
    {
        $mulai = $request->tgl_mulai;
        $selesai = $request->tgl_selesai;
        $id_unit_tertentu = $request->id_unit_tertentu;
    
        $surat_masuk = Disposisi::join('surat_masuks', 'surat_masuks.id_surat_masuk', '=', 'disposisis.id_surat_masuk')->join('units', 'units.id_unit', '=', 'disposisis.id_unit')->whereBetween('tanggal', array($mulai, $selesai))->where('status_surat', 'aktif');
        if (!empty($id_unit_tertentu)) {
            $surat_masuk->where('disposisis.id_unit', $id_unit_tertentu);
        }
    
        $data['mulai'] = $mulai;
        $data['selesai'] = $selesai;
        $data['surat_masuk'] = $surat_masuk->get();
        $data['id_unit_tertentu'] = $id_unit_tertentu;
    
        return view("sekretariat/cetak_laporan_surat_masuk", $data);
    }
    
    function print_laporan_surat_masuk($mulai, $selesai, $id_unit_tertentu)
    {
        $surat_masuk = Disposisi::join('surat_masuks', 'surat_masuks.id_surat_masuk', '=', 'disposisis.id_surat_masuk')->join('units', 'units.id_unit', '=', 'disposisis.id_unit')->whereBetween('tanggal', array($mulai, $selesai))->where('status_surat', 'aktif');
        if (!empty($id_unit_tertentu)) {
            $surat_masuk->where('disposisis.id_unit', $id_unit_tertentu);
        }
    
        $data['surat_masuk'] = $surat_masuk->get();
        $data['mulai'] = $mulai;
        $data['selesai'] = $selesai;
        $data['id_unit_tertentu'] = $id_unit_tertentu; 
        $data['masuk'] = $surat_masuk->count();
    
        return view('sekretariat/print_laporan_surat_masuk', $data);
    } 
    function print_laporan_surat_masuk_all($mulai, $selesai)
    {
        $surat_masuk = Disposisi::join('surat_masuks', 'surat_masuks.id_surat_masuk', '=', 'disposisis.id_surat_masuk')->join('units', 'units.id_unit', '=', 'disposisis.id_unit')->whereBetween('tanggal', array($mulai, $selesai))->where('status_surat', 'aktif')->get();
        
        $data['surat_masuk'] = $surat_masuk;
        $data['mulai'] = $mulai;
        $data['selesai'] = $selesai;
        $data['masuk'] = $surat_masuk->count();

        return view('sekretariat/print_laporan_surat_masuk', $data);
    }   
    
    function laporan_surat_keluar()
    {
        $mulai = '2020-01-01';
        $selesai = date('Y-m-d');
        $unit = Unit::where('status_unit','aktif')->get();
        $id_unit_tertentu = 'id_unit';

        $surat_keluar = SuratKeluar::whereBetween('tanggal',array($mulai,$selesai))->join("units","units.id_unit","=","surat_keluars.id_unit")->where('kelas','aktif')->orderBy('no_surat','DESC');
        if (!empty($id_unit_tertentu)) {
            $surat_keluar->where('surat_keluars.id_unit',$id_unit_tertentu);
        }

        $data['surat_keluar'] = $surat_keluar->get();
        $data['mulai'] = $mulai;
        $data['selesai'] = $selesai;
        $data['unit'] = $unit;

        return view("sekretariat/laporan_surat_keluar",$data);
    }
    function laporan_surat_keluar_filter(Request $request)
    {
        $mulai = $request->tgl_mulai;
        $selesai = $request->tgl_selesai;
        $id_unit_tertentu = $request->id_unit_tertentu;

        $surat_keluar = SuratKeluar::whereBetween('tanggal',array($mulai,$selesai))->join("units","units.id_unit","=","surat_keluars.id_unit")->where('kelas','aktif')->orderBy('no_surat','DESC');
        if (!empty($id_unit_tertentu)) {
            $surat_keluar->where('surat_keluars.id_unit',$id_unit_tertentu);
        }

        $data['mulai'] = $mulai;
        $data['selesai'] = $selesai;
        $data['surat_keluar'] = $surat_keluar->get();
        $data['id_unit_tertentu'] = $id_unit_tertentu;

        return view("sekretariat/cetak_laporan_surat_keluar",$data);
    }
    function print_laporan_surat_keluar($mulai, $selesai, $id_unit_tertentu)
    {
        $surat_keluar = SuratKeluar::whereBetween('tanggal',array($mulai,$selesai))->join("units","units.id_unit","=","surat_keluars.id_unit")->where('kelas','aktif')->orderBy('no_surat','DESC');
        if (!empty($id_unit_tertentu)) {
            $surat_keluar->where('surat_keluars.id_unit',$id_unit_tertentu);
        }

        $data['mulai'] = $mulai;
        $data['selesai'] = $selesai;
        $data['surat_keluar'] = $surat_keluar->get();
        $data['keluar'] = $surat_keluar->count();
        $data['id_unit_tertentu'] = $id_unit_tertentu;

        return view("sekretariat/print_laporan_surat_keluar",$data);
    }
    function print_laporan_surat_keluar_all($mulai, $selesai)
    {
        $surat_keluar = SuratKeluar::whereBetween('tanggal',array($mulai,$selesai))->join("units","units.id_unit","=","surat_keluars.id_unit")->where('kelas','aktif')->orderBy('no_surat','DESC')->get();

        $data['surat_keluar'] = $surat_keluar;
        $data['mulai'] = $mulai;
        $data['selesai'] = $selesai;
        $data['keluar'] = $surat_keluar->count();

        return view("sekretariat/print_laporan_surat_keluar",$data);
    }
}
