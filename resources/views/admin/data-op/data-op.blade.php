@extends('layouts.main')
@section('container')

<div class="w-2/3 mt-10 rounded border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">id_operator</th>
                <th class="text-center bg-blue-700 text-white">Nama Operator</th>
                <th class="text-center bg-blue-700 text-white">Opsi</th>
            </tr>
        </thead>
        @foreach ($daftar as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->id_operator }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_operator }}</h1></td>
                <td class="text-center bg-white">
                    <a href="data-op/edit/{{ $item->id_operator }}"><button class="btn btn-warning">Edit</button></a>
                    <a href="data-op/hapus/{{ $item->id_operator }}"><button class="btn btn-error">Hapus</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
    <div class="m-3 text-center">
        <a href="data-op/tambah"><button class="btn btn-success">Tambah</button></a>
    </div>
</div>


@endsection