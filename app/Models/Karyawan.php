<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    
    // app/Models/Karyawan.php
    protected $fillable = ['nomor_induk', 'nama', 'alamat', 'tanggal_lahir', 'tanggal_bergabung'];

}

