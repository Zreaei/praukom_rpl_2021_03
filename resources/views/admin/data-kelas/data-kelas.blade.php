@extends('layouts.main')
@section('container')

<div class="w-2/3 rounded mt-10 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">id_kelas</th>
                <th class="text-center bg-blue-700 text-white">Nama Kelas</th>
                <th class="text-center bg-blue-700 text-white">Tingkatan</th>
                <th class="text-center bg-blue-700 text-white">Jurusan</th>
                <th class="text-center bg-blue-700 text-white">Angkatan</th>
                <th class="text-center bg-blue-700 text-white">Walas</th>
                <th class="text-center bg-blue-700 text-white">Opsi</th>
            </tr>
        </thead>
        @foreach ($dataKelas as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->id_kelas }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_kelas }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->tingkatan }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->bidang_keahlian }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->tahun_angkatan }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_walas }}</h1></td>
                <td class="text-center bg-white">
                    <a href="data-kelas/edit/{{ $item->id_kelas }}"><button class="btn btn-warning">Edit</button></a>
                    <a href="data-kelas/hapus/{{ $item->id_kelas }}"><button class="btn btn-error">Hapus</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
    <div class="m-3 text-center">
        <a href="data-kelas/tambah"><button class="btn btn-success">Tambah</button></a>
    </div>
</div>


@endsection