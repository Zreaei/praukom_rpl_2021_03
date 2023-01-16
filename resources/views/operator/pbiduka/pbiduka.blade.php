@extends('layouts.main')
@section('title', 'pbiduka')
@section('container')

<div class="overflow-x-auto text-center">
<div class="m-10">
    <a href="/operator/pbiduka/tambah"><button class="btn btn-success">TAMBAH PEMBIMBING IDUKA</button></a>
</div>
<div class="m-10">
    <table class="table w-full">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIK PB IDUKA</th>
            <th>NAMA PB IDUKA</th>
            <th>NO TELP</th>
            <th>ID USER</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($pbiduka as $item)
        <tr>
            <td><h1>{{ $no++ }}</h1></td>
            <td><h1>{{ $item->nik_pbiduka }}</h1></td>
            <td><h1>{{ $item->nama_pbiduka }}</h1></td>
            <td><h1>{{ $item->telp_pbiduka }}</h1></td>
            <td><h1>{{ $item->id_user }}</h1></td>
            <td><h1>{{ $item->username }}</h1></td>
            <td><h1>{{ $item->password }}</h1></td>
            <td><h1>{{ $item->email }}</h1></td>
            <td>
                <a href="/operator/pbiduka/edit/{{ $item->nik_pbiduka }}"><button class="btn btn-warning">Update</button></a>
                <a href="/operator/pbiduka/hapus/{{ $item->id_user }}"><button class="btn btn-error">Hapus</button></a>
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

@endsection