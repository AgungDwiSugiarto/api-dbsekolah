<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class siswa extends Model
{
    protected $primaryKey = 'ID_Siswa';
    protected $table = 'siswa';
    protected $fillable = [
        'ID_Siswa', 'Nama_Siswa', 'Nomor_Telepon', 'Jenis_Kelamin','ID_Kelas'
    ];
    protected $hidden = [];
}