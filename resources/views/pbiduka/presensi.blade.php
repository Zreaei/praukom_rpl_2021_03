@extends('layouts.main')
@section('container')


<div class="">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('pbiduka.prakerin') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="flex justify-center">

        <div class="px-28 py-7 w-full justify-center items-center ">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA PRESENSI SISWA</h3>
                </div>
            </div>
            <!-- Table presensi -->
            <div class="overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-7 py-4 ">
                                No
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Tanggal
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Status
                            </th> 
                            <th scope="col" class="px-7 py-4 ">
                                Keterangan
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Konfirmasi 
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                        @forelse ($datapresensi as $item)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->tgl_presensi }}
                            </td>
                            <td class="text-sm text-item font-semibold px-5 py-4 text-center">
                                @switch($item->status_presensi)
                                @case('hadir')
                                <span class="rounded-lg bg-success px-5 py-3 text-white font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-6 h-6 text-white"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                                    Hadir
                                </span>
                                @break

                                @case('sakit')
                                <span class="rounded-lg bg-warning px-5 py-3 text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-6 h-6 text-white"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" /></svg>
                                    Sakit
                                </span>
                                @break
                                
                                @case('izin')
                                <span class="rounded-lg bg-sky-600 px-5 py-3 text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-6 h-6 text-white mr-2"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" /></svg>
                                    Izin
                                </span>
                                @break

                                @case('alfa')
                                <span class="rounded-lg bg-red-700 px-5 py-3 text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-6 h-6 text-white mr-2"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" /></svg>
                                    Alfa
                                </span>
                                @break
                                @endswitch
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->keterangan_presensi}}
                            </td>
                            <!-- icon Aksi -->
                            <td class="text-sm font-medium leading-5 text-center [#ffffff]space-no-wrap ">
                                <div class="flex justify-center">
                                    <div class="px-4 py-4">
                                        <label for="validasi{{ $item->id_presensi }}" class="text-[#2D5EBB] hover:text-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                        </label>
                                    </div>
                                </div>
                            </td>
                            @empty
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td colspan="9">
                                <div class="text-sm text-item font-semibold px-7 py-4 text-center w-full">
                                    <div class="flex justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-14 h-14 opacity-50">
                                        <path fill-rule="evenodd" d="M5.478 5.559A1.5 1.5 0 016.912 4.5H9A.75.75 0 009 3H6.912a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H15a.75.75 0 000 1.5h2.088a1.5 1.5 0 011.434 1.059l2.213 7.191H17.89a3 3 0 00-2.684 1.658l-.256.513a1.5 1.5 0 01-1.342.829h-3.218a1.5 1.5 0 01-1.342-.83l-.256-.512a3 3 0 00-2.684-1.658H3.265l2.213-7.191z" clip-rule="evenodd" /><path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v6.44l1.72-1.72a.75.75 0 111.06 1.06l-3 3a.75.75 0 01-1.06 0l-3-3a.75.75 0 011.06-1.06l1.72 1.72V3a.75.75 0 01.75-.75z" clip-rule="evenodd" /></svg>
                                    </div>
                                    <p class="font-semibold text-2xl opacity-50">Data Kosong</p>
                                </div>
                            </td>
                        </tr>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            
            @foreach ($datapresensi as $validasi)
            <input type="checkbox" id="validasi{{$validasi->id_presensi}}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-full max-w-2xl bg-[#2D5EBB]">
                    <label for="validasi{{$validasi->id_presensi}}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                    <h3 class="text-lg font-bold text-[#ffffff] text-center">DATA KONFIRMASI PRESENSI</h3>    
                        <div class="flex justify-between mt-5">
                            <div class="form-control w-full max-w-sm mr-2">
                            <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">Pembimbing Sekolah</span></label>
                            @switch($validasi->konfirmasi_pbsekolah)
                                @case('terima')
                                <span class="rounded-lg bg-success py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Dikonfirmasi</span>
                                </span>
                                @break

                                @case('pending')
                                <span class="rounded-lg bg-warning py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">wait</span> 
                                </span>
                                @break

                                @case('tolak')
                                <span class="rounded-lg bg-error py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Ditolak</span>
                                </span>
                                @break
                                
                                @endswitch
                            </div>
                            <div class="form-control w-full max-w-sm">
                            <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">Pembimbing iduka</span></label>
                            @switch($validasi->konfirmasi_pbiduka)
                                @case('terima')
                                <span class="rounded-lg bg-success py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Dikonfirmasi</span>
                                </span>
                                @break

                                @case('pending')
                                <span class="rounded-lg bg-warning py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">wait</span> 
                                </span>
                                @break

                                @case('tolak')
                                <span class="rounded-lg bg-error py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Ditolak</span>
                                </span>
                                @break
                                
                                @endswitch
                            </div>
                        </div>
                        @if($validasi->konfirmasi_pbiduka == "pending")
                        <div class="flex justify-center mt-5">
                            <div class="form-control w-full max-w-sm">
                                <svg fill="none" class="text-[#E63946] w-1/4 mx-auto" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"></path>
                                </svg>
                                <div class="text-center">
                                <h3 class="font-bold text-2xl text-white">Anda yakin ingin konfirmasi ?</h3>
                                </div>
                                <div class="flex justify-center pt-4 gap-x-20 gap-y-3">
                                    <a href="/pbiduka/tolak/{{$validasi->id_presensi}}">
                                        <label class="btn btn-ghost btn-base bg-error w-36 text-white text-base hover:bg-error hover:bg-opacity-70">
                                        Tolak
                                    </a>
                                    <a href="/pbiduka/setuju/{{$validasi->id_presensi}}">
                                        <label class="btn btn-ghost btn-base bg-success w-36 text-white text-base hover:bg-success hover:bg-opacity-70">
                                        Konfirmasi
                                    </a>
                                </div>
                            </div>
                        </div>
                            @else

                        @endif
                </div>
            </div>
            @endforeach
           
@endsection