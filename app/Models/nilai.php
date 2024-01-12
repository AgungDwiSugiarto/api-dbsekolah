<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class nilai extends Model
{
    protected $primaryKey = 'ID_Nilai';
    protected $table = 'nilai';
    protected $fillable = [
        'ID_Nilai', 'ID_Siswa', 'ID_Mata_Pelajaran', 'Nilai'
    ];
    protected $hidden = [];
}