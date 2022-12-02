@extends('layouts.main')
@section('container')

<div class="overflow-x-auto">
    <table class="table w-full">
    <!-- head -->
    <thead>
        <tr>
            <th>id_operator</th>
            <th>Nama Operator</th>
            <th>Username</th>
            <th>id_user</th>
            <th>Opsi</th>
        </tr>
    </thead>
    @foreach ($daftar as $item)
    <tbody>
        <!-- row 1 -->
        <tr>
            <td><h1>{{ $item->id_operator }}</h1></td>
            <td><h1>{{ $item->nama_operator }}</h1></td>
            <td><h1>{{ $item->username }}</h1></td>
            <td><h1>{{ $item->id_user }}</h1></td>
            <td>
                <a href="data-op/edit/{{ $item->id_operator }}"><button class="btn btn-warning">Edit</button></a>
                <a href="data-op/hapus/{{ $item->id_operator }}"><button class="btn btn-error">Hapus</button></a>
            </td>
        </tr>
    </tbody>
    @endforeach
    </table>
</div>
<div>
    <a href="data-op/tambah"><button class="btn btn-success">Tambah</button></a>
</div>


@endsection