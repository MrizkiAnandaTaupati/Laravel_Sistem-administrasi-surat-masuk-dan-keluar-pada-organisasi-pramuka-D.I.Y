<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekretariat extends Model
{
    use HasFactory;
    public $primaryKey = "id_sekretariat";
    public $fillable = array("username_sekretariat","password_sekretariat","nama_sekretariat","email_sekretariat","status_sekretariat");
}
