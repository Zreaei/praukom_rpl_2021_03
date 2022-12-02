@extends('layouts.main')
@section('container')

<div class="overflow-x-auto">
    <table class="table w-full">
    <!-- head -->
    <thead>
        <tr>
            <th>id_admkeu</th>
            <th>id_user</th>
            <th>nama_admkeu</th>
        </tr>
    </thead>
    
    <tbody>
    @foreach ($admkeu as $item)
        <!-- row 1 -->
        <tr>
            <td><h1>{{ $item->id_admkeu }}</h1></td>
            <td><h1>{{ $item->id_user }}</h1></td>
            <td><h1>{{ $item->nama_admkeu }}</h1></td>
            <td>
                <a href="edit/{{ $item->id_admkeu }}"><button class="btn btn-warning">Update</button></a>
                <a href="hapus/{{ $item->id_admkeu }}"><button class="btn btn-error">Hapus</button></a>
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