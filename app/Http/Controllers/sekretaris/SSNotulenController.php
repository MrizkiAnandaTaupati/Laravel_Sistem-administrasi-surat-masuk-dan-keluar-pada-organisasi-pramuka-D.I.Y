<?php

namespace App\Http\Controllers\sekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notulen;
use App\Models\Unit;

class SSNotulenController extends Controller
{
    function index()
    {
        $data['notulen'] = Notulen::where("status_notulen","aktif")->orderBy('id_notulen','DESC')->get();

        return view("sekretaris/notulen",$data);
    }
    function tambah_notulen()
    {
        $data['unit'] = Unit::where("status_unit","aktif")->get();

        return view("sekretaris/notulen_tambah",$data);
    }
    function notulen_tambah(Request $request)
    {
        $data['notulen'] = Notulen::join("units","units.id_unit","=","notulens.unit")->where("status_notulen","aktif")->get();

        $data['nama_kegiatan'] = $request->nama_kegiatan;
        $data['tanggal_kegiatan'] = $request->tanggal_kegiatan;
        $data['waktu'] = $request->waktu;
        $data['tempat'] = $request->tempat;
        $data['isi'] = $request->isi;
        $data['status_notulen'] = "aktif";

        Notulen::create($data);
        return redirect("sekretaris/notulen");
    }
    function detail_notulen($id_notulen)
    {
        $data['notulen'] = Notulen::join("units","units.id_unit","=","notulens.unit")->where('id_notulen', $id_notulen)->first();

        return view('sekretaris/detail_notulen', $data);
    }
    function notulen_ubah($id_notulen)
    {
        $data['unit'] = Unit::where("status_unit","aktif")->get();
        $data['notulen'] = Notulen::where("id_notulen",$id_notulen)->first();

        return view("sekretaris/notulen_ubah",$data);
    }
    function ubah_notulen(Request $request, $id_notulen)
    {
        $data['unit'] = $request->unit;
        $data['nama_kegiatan'] = $request->nama_kegiatan;
        $data['tanggal_kegiatan'] = $request->tanggal_kegiatan;
        $data['waktu'] = $request->waktu;
        $data['tempat'] = $request->tempat;
        $data['isi'] = $request->isi;
        $data['status_notulen'] = "aktif";

        Notulen::where("id_notulen",$id_notulen)->update($data);

        return redirect("sekretaris/notulen");
    }
    function hapus_notulen(Request $request, $id_notulen)
    {
        $data['status_notulen'] = "nonaktif";
        Notulen::where("id_notulen",$id_notulen)->update($data);

        return redirect("sekretaris/notulen");
    }
}
