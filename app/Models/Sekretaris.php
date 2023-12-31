<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekretaris extends Model
{
    use HasFactory;
    protected $primaryKey = "id_sekretaris";
    public $fillable = array("username_sekretaris","password_sekretaris","nama_sekretaris","email_sekretaris","status_sekretaris");
}
