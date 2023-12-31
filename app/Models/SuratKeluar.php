<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;
    public $fillable = array("no_surat", "jenis_surat", "sifat_surat", "id_unit", "tujuan", "perihal", "tanggal", "isi_surat", "status_surat", "kelas","alasan_ditolak");

}
