<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class guru extends Model
{
    protected $primaryKey = 'ID_Guru';
    protected $table = 'guru';
    protected $fillable = [
        'ID_Guru', 'Nama_Guru', 'Nomor_Telepon', 'Jenis_Kelamin','Mata_Pelajaran'
    ];
    protected $hidden = [];
}