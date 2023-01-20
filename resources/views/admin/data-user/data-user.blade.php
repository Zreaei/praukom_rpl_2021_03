@extends('layouts.main')
@section('container')

<div class="w-2/3 rounded mt-10 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">id_user</th>
                <th class="text-center bg-blue-700 text-white">Username</th>
                <th class="text-center bg-blue-700 text-white">Email</th>
                <th class="text-center bg-blue-700 text-white">Level</th>
                <th class="text-center bg-blue-700 text-white">Opsi</th>
            </tr>
        </thead>
        @foreach ($dataUser as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->id_user }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->username }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->email }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_level }}</h1></td>
                <td class="text-center bg-white">
                    <a href="data-user/edit/{{ $item->id_user }}"><button class="btn btn-warning">Edit</button></a>
                    <a href="data-user/hapus/{{ $item->id_user }}"><button class="btn btn-error">Hapus</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
    <div class="m-3 text-center">
        <a href="data-user/tambah"><button class="btn btn-success">Tambah</button></a>
    </div>
</div>


@endsection