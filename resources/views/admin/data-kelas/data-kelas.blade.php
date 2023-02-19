@extends('layouts.main')
@section('container')

<div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
    <a href="{{ route('home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
    </a>
</div>

<div class="w-2/3 rounded mt-10 border-slate-500 mx-auto">
    <div class="overflow-x-auto">
        <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th class="text-center bg-blue-700 text-white">id_kelas</th>
                <th class="text-center bg-blue-700 text-white">Nama Kelas</th>
                <th class="text-center bg-blue-700 text-white">Tingkatan</th>
                <th class="text-center bg-blue-700 text-white">Jurusan</th>
                <th class="text-center bg-blue-700 text-white">Angkatan</th>
                <th class="text-center bg-blue-700 text-white">Walas</th>
                <th class="text-center bg-blue-700 text-white">Opsi</th>
            </tr>
        </thead>
        @foreach ($dataKelas as $item)
        <tbody>
            <!-- row 1 -->
            <tr>
                <td class="text-center bg-white"><h1>{{ $item->id_kelas }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_kelas }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->tingkatan }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->bidang_keahlian }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->tahun_angkatan }}</h1></td>
                <td class="text-center bg-white"><h1>{{ $item->nama_walas }}</h1></td>
                <td class="text-center bg-white">
                    <a href="data-kelas/edit/{{ $item->id_kelas }}"><button class="btn btn-warning">Edit</button></a>
                    <a href="data-kelas/hapus/{{ $item->id_kelas }}"><button class="btn btn-error">Hapus</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
    <div class="m-3 text-center">
        <a href="data-kelas/tambah"><button class="btn btn-success">Tambah</button></a>
    </div>
</div>


@endsection