@extends('layouts.main')
@section('container')

<div class="w-1/3 rounded mt-10 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-slate-700">id_level</th>
                <th class="text-center bg-slate-700">Level</th>
            </tr>
        </thead>
        @foreach ($dataLevel as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-slate-800"><h1>{{ $item->id_level }}</h1></td>
                <td class="text-center bg-slate-800"><h1>{{ $item->nama_level }}</h1></td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>

@endsection