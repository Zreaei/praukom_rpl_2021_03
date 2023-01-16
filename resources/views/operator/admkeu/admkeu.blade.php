@extends('layouts.main')
<<<<<<< HEAD
@section('title', 'admkeu')
@section('container')

<div class="overflow-x-auto text-center">
<div class="m-10">
    <a href="/operator/admkeu/tambah"><button class="btn btn-success">TAMBAH ADM KEUANGAN</button></a>
</div>
<div class="m-10">
    <table class="table w-full">
    <thead>
        <tr>
            <th>NO</th>
            <th>ID ADM KEUANGAN</th>
            <th>NAMA ADM KEUANGAN</th>
            <th>ID USER</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($admkeu as $item)
        <tr>
            <td><h1>{{ $no++ }}</h1></td>
            <td><h1>{{ $item->id_admkeu }}</h1></td>
            <td><h1>{{ $item->nama_admkeu }}</h1></td>
            <td><h1>{{ $item->id_user }}</h1></td>
            <td><h1>{{ $item->username }}</h1></td>
            <td><h1>{{ $item->password }}</h1></td>
            <td><h1>{{ $item->email }}</h1></td>
            <td>
                <a href="/operator/admkeu/edit/{{ $item->id_admkeu }}"><button class="btn btn-warning">Edit</button></a>
                <a href="/operator/admkeu/hapus/{{ $item->id_user }}"><button class="btn btn-error">Hapus</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
</div>

@if(session('sukses'))
<div class="alert alert-succes">
    {{ session('sukses') }}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
=======
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
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646


@endsection