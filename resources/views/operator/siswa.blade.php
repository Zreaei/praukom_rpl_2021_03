@extends('layouts.main')
@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA SISWA</title>
</head>
<body>
    
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    NO
                </th>
                <th scope="col" class="py-3 px-6">
                    NAMA
                </th>
                <th scope="col" class="py-3 px-6">
                    TEMPAT LAHIR
                </th>
                <th scope="col" class="py-3 px-6">
                    TANGGAL LAHIR
                </th>
                <th scope="col" class="py-3 px-6">
                    NO TELP
                </th>
                <th scope="col" class="py-3 px-6">
                    KELAS
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">EDIT</span>
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">HAPUS</span>
                </th>
            </tr>
        </thead>
        <?php
        $no = 1;
        ?>
        @foreach($siswa as $datasiswa)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th class="py-4 px-6">
                    {{$no++}}
                </th>
                <td class="py-4 px-6">
                    {{$datasiswa->nis}}
                </td>
                <td class="py-4 px-6">
                    {{$datasiswa->nama_siswa}}
                </td>
                <td class="py-4 px-6">
                    {{$datasiswa->tempat_lahir}}
                </td>
                <td class="py-4 px-6">
                    {{$datasiswa->tgl_lahir}}
                </td>
                <td class="py-4 px-6">
                    {{$datasiswa->telp_siswa}}
                </td>
                <td class="py-4 px-6">
                    {{$datasiswa->kelas}}
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="siswa/edit/{{$datasiswa->nis}}" class="btn btn-yellow">Edit</a>
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="siswa/hapus/{{$datasiswa->nis}}" class="btn btn-red">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>