<?php

namespace App\Imports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            "nisn"          => $row[0],
            "nama"          => $row[1],
            "jenis_kelamin" => $row[2],
            "tempat_lahir"  => $row[3],
            "tanggal_lahir" => $row[4],
            "nama_ortu"     => $row[5],
            "program"       => $row[6],
            "mapel_pilihan" => $row[7],
        ]);
    }
}
