<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    public $table = 'units';
    protected $primaryKey = 'id_unit';
    public $fillable = array("tipe_unit","nama_unit","kode_unit","status_unit");
}
