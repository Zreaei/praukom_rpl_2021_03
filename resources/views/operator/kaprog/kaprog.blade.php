@extends('layouts.main')
@section('title', 'kaprog')
@section('container')

<div class="overflow-x-auto text-center">
<div class="m-10">
    <a href="/operator/kaprog/tambah"><button class="btn btn-success">TAMBAH KAPROG</button></a>
</div>
<div class="m-10">
    <table class="table w-full">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIP KAPROG</th>
            <th>NAMA KAPROG</th>
            <th>ID USER</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($kaprog as $item)
        <tr>
            <td><h1>{{ $no++ }}</h1></td>
            <td><h1>{{ $item->nip_kaprog }}</h1></td>
            <td><h1>{{ $item->nama_kaprog }}</h1></td>
            <td><h1>{{ $item->id_user }}</h1></td>
            <td><h1>{{ $item->username }}</h1></td>
            <td><h1>{{ $item->password }}</h1></td>
            <td><h1>{{ $item->email }}</h1></td>
            <td>
                <a href="/operator/kaprog/edit/{{ $item->nip_kaprog }}"><button class="btn btn-warning">Update</button></a>
                <a href="/operator/kaprog/hapus/{{ $item->id_user }}"><button class="btn btn-error">Hapus</button></a>
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