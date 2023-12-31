<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserUnit extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_user_unit';
    public $fillable = array("id_unit","username_user","password_user","nama_user","email_user","status_user");
}