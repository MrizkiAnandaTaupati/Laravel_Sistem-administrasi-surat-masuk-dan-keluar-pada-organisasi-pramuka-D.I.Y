<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RingkasanKegiatan extends Model
{
    use HasFactory;
    public $fillable = array("id_unit","nama_kegiatan","tanggal_kegiatan","waktu","tempat","isi","status_ringkasan");

}
