<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
            "nisn",
            "nama",
            "jenis_kelamin",
            "tempat_lahir",
            "tanggal_lahir" ,
            "nama_ortu" ,
            "program" ,
            "mapel_pilihan"
        ];
}
