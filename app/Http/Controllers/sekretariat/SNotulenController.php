<?php

namespace App\Http\Controllers\sekretariat;

use App\Http\Controllers\Controller;
use App\Models\Notulen;
use App\Models\Unit;
use Illuminate\Http\Request;

class SNotulenController extends Controller
{
    function index()
    {
        $data['notulen'] = Notulen::join("units","units.id_unit","=","notulens.unit")->where("status_notulen","aktif")->get();

        return view("sekretariat/notulen",$data);
    }
    function detail_notulen($id_notulen)
    {
        $data['notulen'] = Notulen::join("units","units.id_unit","=","notulens.unit")->where('id_notulen', $id_notulen)->first();

        return view('sekretariat/detail_notulen', $data);
    }
}
