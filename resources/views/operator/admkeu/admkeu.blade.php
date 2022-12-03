@extends('layouts.main')
@section('container')

<div class="overflow-x-auto">
    <table class="table w-full">
    <!-- head -->
    <thead>
        <tr>
            <th>id_admkeu</th>
            <th>Nama admkeu</th>
            <th>Username</th>
            <th>id_user</th>
            <th>Opsi</th>
        </tr>
    </thead>
    @foreach ($daftar as $item)
    <tbody>
        <!-- row 1 -->
        <tr>
            <td><h1>{{ $item->id_admkeu }}</h1></td>
            <td><h1>{{ $item->nama_admkeu }}</h1></td>
            <td><h1>{{ $item->username }}</h1></td>
            <td><h1>{{ $item->id_user }}</h1></td>
            <td>
                <a href="admkeu/edit/{{ $item->id_admkeu }}"><button class="btn btn-warning">Edit</button></a>
                <a href="admkeu/hapus/{{ $item->id_admkeu }}"><button class="btn btn-error">Hapus</button></a>
            </td>
        </tr>
    </tbody>
    @endforeach
    </table>
</div>
<div>
    <a href="admkeu/tambah"><button class="btn btn-success">Tambah</button></a>
</div>


@endsection