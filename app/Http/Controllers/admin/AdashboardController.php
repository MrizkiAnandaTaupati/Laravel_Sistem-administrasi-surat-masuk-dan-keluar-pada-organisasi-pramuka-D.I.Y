<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Sekretaris;
use App\Models\Sekretariat;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\Notulen;
use App\Models\RingkasanKegiatan;
use App\Models\Unit;
use App\Models\UserUnit;
use App\Models\Disposisi;
use Illuminate\Http\Request;

class AdashboardController extends Controller
{
    function index()
    {
        $data['masuk'] = SuratMasuk::where("status_surat","aktif")->count();
        $data['unit'] = Unit::where("status_unit","aktif")->count();
        $data['keluar'] = SuratKeluar::where("kelas","aktif")->count();

        return view("admin/dashboard",$data);
    }

    function arsip()
    {
        return view("admin/arsip");
    }

    function arsip_admin()
    {
        $data['admin'] = Admin::where("status_admin","nonaktif")->get();

        return view("admin/arsip_admin",$data);
    }

    function arsip_sekretariat()
    {
        $data['sekretariat'] = Sekretariat::where("status_sekretariat","nonaktif")->get();

        return view("admin/arsip_sekretariat",$data);
    }

    function arsip_sekretaris()
    {
        $data['sekretaris'] = Sekretaris::where("status_sekretaris","nonaktif")->get();

        return view("admin/arsip_sekretaris",$data);
    }

    function arsip_unit()
    {
        $data['unit'] = Unit::where("status_unit","nonaktif")->get();

        return view("admin/arsip_unit",$data);
    }

    function arsip_user_unit()
    {
        $data['user_unit'] = UserUnit::where("status_user","nonaktif")->get();

        return view("admin/arsip_user_unit",$data);
    }
    
    function arsip_surat_masuk()
    {
        $data['surat'] = SuratMasuk::where("status_surat","nonaktif")->orderBy('id_surat_masuk','DESC')->get();

        return view("admin/arsip_surat_masuk",$data);
    }

    function detail_surat($id_surat_masuk)
    {
        $data['disposisi'] = Disposisi::join("units","units.id_unit","=","disposisis.id_unit")->where('id_surat_masuk',$id_surat_masuk)->first();
        
        $data['surat'] = SuratMasuk::where("id_surat_masuk",$id_surat_masuk)->first();

        return view("admin/detail_surat_masuk",$data);
    }

    function arsip_surat_keluar()
    {
        $data['surat'] = SuratKeluar::join("units","units.id_unit","=","surat_keluars.id_unit")->where('kelas','nonaktif')->orderBy('no_surat','DESC')->get();

        return view("admin/arsip_surat_keluar",$data);
    }

    function detail_surat_keluar($no_surat)
    {
        $data['surat'] = SuratKeluar::join('units','units.id_unit','=','surat_keluars.id_unit')->where('no_surat',$no_surat)->first();

        return view("admin/detail_surat_keluar_arsip",$data);
    }

    function arsip_notulen()
    {
        $data['notulen'] = Notulen::join("units","units.id_unit","=","notulens.unit")->where("status_notulen","nonaktif")->get();

        return view("admin/arsip_notulen",$data);
    }

    function detail_notulen_arsip($id_notulen)
    {
        $data['notulen'] = Notulen::join("units","units.id_unit","=","notulens.unit")->where("id_notulen",$id_notulen)->first();

        return view("admin/detail_notulen_arsip",$data);
    }

    function arsip_ringkasan_kegiatan()
    {
        $data['ringkasan_kegiatan'] = RingkasanKegiatan::join('units','units.id_unit','=','ringkasan_kegiatans.id_unit')->where('status_ringkasan','nonaktif')->get();

        return view("admin/arsip_ringkasan_kegiatan",$data);
    }

    function detail_ringkasan_kegiatan_arsip($id_ringkasan_kegiatan)
    {
        $data['ringkasan_kegiatan'] = RingkasanKegiatan::join('units','units.id_unit','=','ringkasan_kegiatans.id_unit')->where('id_ringkasan_kegiatan',$id_ringkasan_kegiatan)->first();

        return view("admin/detail_ringkasan_kegiatan_arsip",$data);
    }
}
