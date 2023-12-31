<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notulen;

class ANotulenController extends Controller
{
    function index()
    {
        $data['notulen'] = Notulen::join("units","units.id_unit","=","notulens.unit")->where("status_notulen","aktif")->get();

        return view("admin/notulen",$data);
    }
    function detail_notulen($id_notulen)
    {
        $data['notulen'] = Notulen::join("units","units.id_unit","=","notulens.unit")->where("id_notulen",$id_notulen)->first();

        return view("admin/detail_notulen",$data);
    }
}
