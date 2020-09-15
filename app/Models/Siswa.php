<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $table = 'siswa';
    protected $fillable = [
        'nama_depan' , 'jenis_kelamin', 'agama', 'alamat'
    ];
}
