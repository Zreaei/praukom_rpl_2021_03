@extends('layouts.main')
@section('container')

<div class="w-2/3 border-2 rounded border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center">id_user</th>
                <th class="text-center">Username</th>
                <th class="text-center">Email</th>
                <th class="text-center">Level</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach ($dataUser as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center"><h1>{{ $item->id_user }}</h1></td>
                <td class="text-center"><h1>{{ $item->username }}</h1></td>
                <td class="text-center"><h1>{{ $item->email }}</h1></td>
                <td class="text-center"><h1>{{ $item->level }}</h1></td>
                <td class="text-center">
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