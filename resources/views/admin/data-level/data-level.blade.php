@extends('layouts.main')
@section('container')

<div class=" bg-red-500">
    <a href="/admin"><button class="btn btn-success">Kembali</button></a>
</div>

<div class="w-1/3 rounded mt-10 mx-auto text-center">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">id_level</th>
                <th class="text-center bg-blue-700 text-white">Level</th>
            </tr>
        </thead>
        @foreach ($dataLevel as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->id_level }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_level }}</h1></td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
</div>
@endsection