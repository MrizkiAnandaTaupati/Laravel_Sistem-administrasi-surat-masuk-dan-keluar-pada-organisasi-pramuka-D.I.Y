<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    public $fillable = array("no_surat","klasifikasi","sifat_surat","asal_surat","tanggal","lampiran","perihal","file_surat_masuk","status_surat","posisi_surat");
}
