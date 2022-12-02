@extends('layouts.main')
@section('container')

<div class="overflow-x-auto">
    <table class="table w-full">
    <!-- head -->
    <thead>
        <tr>
            <th>id_user</th>
            <th>Username</th>
            <th>Email</th>
            <th>Level</th>
            <th>Opsi</th>
        </tr>
    </thead>
    @foreach ($dataUser as $item)
    <tbody>
        <!-- row 1 -->
        <tr>
            <td><h1>{{ $item->id_user }}</h1></td>
            <td><h1>{{ $item->username }}</h1></td>
            <td><h1>{{ $item->email }}</h1></td>
            <td><h1>{{ $item->level }}</h1></td>
            <td>
                <a href="data-user/edit/{{ $item->id_user }}"><button class="btn btn-warning">Edit</button></a>
                <a href="data-user/hapus/{{ $item->id_user }}"><button class="btn btn-error">Hapus</button></a>
            </td>
        </tr>
    </tbody>
    @endforeach
    </table>
</div>
<div>
    <a href="data-user/tambah"><button class="btn btn-success">Tambah</button></a>
</div>


@endsection