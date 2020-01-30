<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    .text-center{
        text-align: center;
    }
</style>
</head>
<body>
    <table style="width: 100%">
        <thead>
            <tr>
            <th class="text-center">No</th>
            <th class="text-center" >NISN</th>
            <th class="text-center" >Nama</th>
            <th class="text-center" >Jenis Kelamin</th>
            <th class="text-center" >Tempat Lahir</th>
            <th class="text-center" >Tanggal Lahir</th>
            <th class="text-center" >Orang Tua</th>
            <th class="text-center" >Program</th>
            <th class="text-center" >Mapel Pilihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $siswa->nisn }}</td>
                <td class="text-center">{{ $siswa->nama }}</td>
                <td class="text-center">{{ $siswa->jenis_kelamin }}</td>
                <td class="text-center">{{ $siswa->tempat_lahir }}</td>
                <td class="text-center">{{ date("d-M-Y", strtotime($siswa->tanggal_lahir)) }}</td>
                <td class="text-center">{{ $siswa->nama_ortu}}</td>
                <td class="text-center">{{ $siswa->program }}</td>
                <td class="text-center">{{ $siswa->mapel_pilihan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>