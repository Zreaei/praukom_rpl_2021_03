@extends('layouts.main')
@section('title', 'wkhubin')
@section('container')

<div class="overflow-x-auto text-center">
<div class="m-10">
    <a href="/operator/wkhubin/tambah"><button class="btn btn-success">TAMBAH WAKA HUBIN</button></a>
</div>
<div class="m-10">
    <table class="table w-full">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIP WAKA HUBIN</th>
            <th>NAMA WAKA HUBIN</th>
            <th>ID USER</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($wkhubin as $item)
        <tr>
            <td><h1>{{ $no++ }}</h1></td>
            <td><h1>{{ $item->nip_wkhubin }}</h1></td>
            <td><h1>{{ $item->nama_wkhubin }}</h1></td>
            <td><h1>{{ $item->id_user }}</h1></td>
            <td><h1>{{ $item->username }}</h1></td>
            <td><h1>{{ $item->password }}</h1></td>
            <td><h1>{{ $item->email }}</h1></td>
            <td>
                <a href="/operator/wkhubin/edit/{{ $item->nip_wkhubin }}"><button class="btn btn-warning">Update</button></a>
                <a href="/operator/wkhubin/hapus/{{ $item->id_user }}"><button class="btn btn-error">Hapus</button></a>
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