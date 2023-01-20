@extends('layouts.main')
@section('container')

<div class="w-2/3 rounded mt-10 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">id_jurusan</th>
                <th class="text-center bg-blue-700 text-white">Kaprog</th>
                <th class="text-center bg-blue-700 text-white">Bidang Keahlian</th>
                <th class="text-center bg-blue-700 text-white">Program Keahlian</th>
                <th class="text-center bg-blue-700 text-white">Opsi</th>
            </tr>
        </thead>
        @foreach ($dataJurusan as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->id_jurusan }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_kaprog }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->bidang_keahlian }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->program_keahlian }}</h1></td>
                <td class="text-center bg-white">
                    <a href="data-jurusan/edit/{{ $item->id_jurusan }}"><button class="btn btn-warning">Edit</button></a>
                    <a href="data-jurusan/hapus/{{ $item->id_jurusan }}"><button class="btn btn-error">Hapus</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
    <div>
        <div class="m-3 text-center">
            <a href="data-jurusan/tambah"><button class="btn btn-success">Tambah</button></a>
        </div>
    </div>
</div>

@endsection