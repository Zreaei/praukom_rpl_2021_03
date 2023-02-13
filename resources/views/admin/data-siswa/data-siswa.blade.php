@extends('layouts.main')
@section('container')

<div class="w-5/6 rounded mt-10 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">NIS</th>
                <th class="text-center bg-blue-700 text-white">Kode User</th>
                <th class="text-center bg-blue-700 text-white">Kelas</th>
                <th class="text-center bg-blue-700 text-white">Nama Siswa</th>
                <th class="text-center bg-blue-700 text-white">Tempat Lahir</th>
                <th class="text-center bg-blue-700 text-white">Tanggal Lahir</th>
                <th class="text-center bg-blue-700 text-white">No Telepon</th>
                <th class="text-center bg-blue-700 text-white">Opsi</th>
            </tr>
        </thead>
        @foreach ($dataSiswa as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->nis }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->user }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->kelas }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_siswa }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->tempat_lahir }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->tgl_lahir }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->telp_siswa }}</h1></td>
                <td class="text-center bg-white">
                    <a href="data-siswa/edit/{{ $item->nis }}"><button class="btn btn-warning">Edit</button></a>
                    <a href="data-siswa/hapus/{{ $item->nis }}"><button class="btn btn-error">Hapus</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
    <div>
        <div class="m-3 text-center">
            <a href="data-siswa/tambah"><button class="btn btn-success">Tambah</button></a>
        </div>
    </div>
</div>

@endsection