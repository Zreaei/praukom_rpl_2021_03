@extends('layouts.main')
@section('container')

<div class="w-1/2 rounded mt-10 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">id_angkatan</th>
                <th class="text-center bg-blue-700 text-white">Tahun Angkatan</th>
                <th class="text-center bg-blue-700 text-white">Opsi</th>
            </tr>
        </thead>
        @foreach ($dataAngkatan as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->id_angkatan }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->tahun_angkatan }}</h1></td>
                <td class="text-center bg-white">
                    <a href="data-angkatan/edit/{{ $item->id_angkatan }}"><button class="btn btn-warning">Edit</button></a>
                    <a href="data-angkatan/hapus/{{ $item->id_angkatan }}"><button class="btn btn-error">Hapus</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
    <div>
        <div class="m-3 text-center">
            <a href="data-angkatan/tambah"><button class="btn btn-success">Tambah</button></a>
        </div>
    </div>
</div>

@endsection