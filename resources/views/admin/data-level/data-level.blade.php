@extends('layouts.main')
@section('container')

<div class="w-1/3 rounded m-5 mx-auto text-center">
    <div class="overflow-x-auto shadow-md">
        <table class="table w-full">
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">id_level</th>
                <th class="text-center bg-blue-700 text-white">Level</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($dataLevel as $item)
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->id_level }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_level }}</h1></td>
            </tr>
            @endforeach
        </tbody>
        
        </table>
    </div>
    <div class="text-center m-3">
        <a href="/admin"><button class="btn btn-success">Kembali</button></a>
    </div>
</div>
@endsection