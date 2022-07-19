<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'nis', 'agama', 'jenis_klamin', 'alamat', 'tgl_lahir'];
    // kapan data dibuat kapan data di update
    public $timestamps = true;
}
