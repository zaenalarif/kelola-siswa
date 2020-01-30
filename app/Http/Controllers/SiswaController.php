<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Imports\SiswasImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class SiswaController extends Controller
{
    public function index() 
    {
        $siswas = DB::table("siswas")->get();
        return view("siswa.index", compact("siswas"));
    }

    public function create()
    {
        return view("siswa.create");
    }

    public function store(Request $request) 
    {
        $request->validate([
            "nisn"          => "required|unique:siswas",
            "nama"          => "required",
            "jenis_kelamin" => "required",
            "tempat_lahir"  => "required",
            "tanggal_lahir" => "required",
            "nama_ortu"     => "required",
        ]);

        DB::table("siswas")->insert([
            "nisn"          => $request->nisn,
            "nama"          => $request->nama,
            "jenis_kelamin" => $request->jenis_kelamin,
            "tempat_lahir"  => $request->tempat_lahir,
            "tanggal_lahir" => $request->tanggal_lahir,
            "nama_ortu"     => $request->nama_ortu,
            "program"       => $request->program,
            "mapel_pilihan"  => $request->mapel_pilihan
        ]);

        alert()->success('Siswa berhasil ditambahkan.', 'Berhasil');
        return redirect("/siswa")->with("msg", "Siswa berhasil ditambahkan");
    }

    public function edit($id) 
    {
        $siswa = DB::table('siswas')->where('id', $id)->first();
        
        return view("siswa.edit", compact("siswa"));
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            "nisn"          => "required|unique:siswas",
            "nama"          => "required",
            "jenis_kelamin" => "required",
            "tempat_lahir"  => "required",
            "tanggal_lahir" => "required",
            "nama_ortu"     => "required",
        ]);

        $siswa = DB::table('siswas')->where('id', $id);        

        $siswa->update([
            "nisn"          => $request->nisn,
            "nama"          => $request->nama,
            "jenis_kelamin" => $request->jenis_kelamin,
            "tempat_lahir"  => $request->tempat_lahir,
            "tanggal_lahir" => $request->tanggal_lahir,
            "nama_ortu"     => $request->nama_ortu,
            "program"       => $request->program,
            "mapel_pilihan"  => $request->mapel_pilihan
        ]);

        alert()->success('Siswa berhasil diubah.', 'Berhasil');
        return redirect("/siswa")->with("msg", "Siswa berhasil diubah");
    }

    public function delete($id) 
    {
        DB::table('siswas')->where('id', $id)->delete();

        alert()->success('siswa berhasil di hapus.', 'Berhasil');
        return redirect("/siswa")->with("msg", "siswa berhasil di hapus");
    }


    public function import(Request $request)
    {
        $this->validate($request, [
            "file" => "required|mimes:xlsx, xls"
        ]);

        $file = $request->file('file');

        $nama_file = rand().$file->getClientOriginalName();
        
        $file->move("file_siswa", $nama_file);
        
        Excel::import(new SiswasImport, public_path("/file_siswa/". $nama_file));
        
        return redirect("/siswa")->with("msg", "Data berhasil di import");
    }


    public function cetak()
    {
        $siswas = DB::table("siswas")->get();
        $pdf = PDF::loadView('siswa.cetak', compact("siswas"));
        return $pdf->download('laporan_siswa.pdf');
    }
}
