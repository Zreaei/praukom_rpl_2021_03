@extends('layouts.main')
@section('container')

<div class="w-1/3 rounded mt-10 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-slate-700">id_angkatan</th>
                <th class="text-center bg-slate-700">Tahun Angkatan</th>
            </tr>
        </thead>
        @foreach ($dataAngkatan as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-slate-800"><h1>{{ $item->id_angkatan }}</h1></td>
                <td class="text-center bg-slate-800"><h1>{{ $item->tahun_angkatan }}</h1></td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>

@endsection