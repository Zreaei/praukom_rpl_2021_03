@extends('layouts.main')
@section('container')


<div class="">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('admkeu.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="flex justify-center">

        <div class="px-28 py-7 w-full justify-center items-center ">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA PENGAJUAN SISWA</h3>
                </div>
            </div>
            <!-- Table pengajuan -->

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-5 py-4 ">
                                No
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Siswa
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Tanggal Pengajuan
                            </th> 
                            <th scope="col" class="px-7 py-4 ">
                                IDUKA
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
                    @foreach ($datapengajuan as $a)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-5 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-5 py-4 text-center">
                                <label for="detail-siswa{{ $a->nis }}" type="button" class="text-[#ffffff] bg-[#0029FF] hover:bg-opacity-50 focus:outline-none focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5">Data Siswa</label>          
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $a->tgl_pengajuan }}
                            </td>
                            <td class="text-sm text-item font-semibold px-5 py-4 text-center">
                                <label for="detail-IDUKA{{ $a->id_iduka }}" type="button" class="text-[#ffffff] bg-[#FFA434] hover:bg-opacity-50 focus:outline-none focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5">Data IDUKA</label>          
                            </td>
                            <!-- icon Aksi -->
                            <td class="text-sm font-medium leading-5 text-center [#ffffff]space-no-wrap ">
                                <div class="flex justify-center">
                                    <div class="px-4 py-4">
                                        <label for="validasi{{ $a->id_pengajuan }}" class="text-[#2D5EBB] hover:text-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Detail Data Siswa -->
        @foreach ($datapengajuan as $item)
        <input type="checkbox" id="detail-siswa{{ $item->nis }}" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                <label for="detail-siswa{{ $item->nis }}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                <h3 class="text-lg font-bold text-[#ffffff] text-center">DATA SISWA</h3>

                <div class="flex justify-between rounded-lg bg-white mt-5 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">NIS</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->nis }}</span>
                        </div>
                        
                    </div>
                
                </div>
                <div class="flex justify-between rounded-lg bg-white mt-2 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Nama</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->nama_siswa }}</span>
                        </div>
                        
                    </div>
                
                </div>
                <div class="flex justify-between rounded-lg bg-white mt-2 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Tempat Lahir</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->tempat_lahir }}</span>
                        </div>
                        
                    </div>
                
                </div>
                <div class="flex justify-between rounded-lg bg-white mt-2 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Tanggal Lahir</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->tgl_lahir }}</span>
                        </div>
                        
                    </div>
                
                </div>
                <div class="flex justify-between rounded-lg bg-white mt-2 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Telepon</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->telp_siswa }}</span>
                        </div>
                        
                    </div>
                
                </div>
                <div class="flex justify-between rounded-lg bg-white mt-2 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Kelas</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->tingkatan }}</span>
                        </div>
                        
                    </div>
                
                </div>
                <div class="flex justify-between rounded-lg bg-white mt-2 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Jurusan</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->program_keahlian }}</span>
                        </div>
                        
                    </div>
                
                </div>
                <div class="flex justify-between rounded-lg bg-white mt-2 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Bidang Keahlian</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->bidang_keahlian }}</span>
                        </div>
                        
                    </div>
                
                </div>
            </div>
        </div>
        @endforeach 

        <!-- Modal Detail Data IDUKA -->
        @foreach ($datapengajuan as $item)
        <input type="checkbox" id="detail-IDUKA{{ $item->id_iduka }}" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                <label for="detail-IDUKA{{ $item->id_iduka }}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                <h3 class="text-lg font-bold text-[#ffffff] text-center">DATA IDUKA</h3>
                
                <div class="flex justify-between rounded-lg bg-white mt-5 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Nama IDUKA</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->nama_iduka }}</span>
                        </div>
                        
                    </div>
                
                </div>
                <div class="flex justify-between rounded-lg bg-white mt-2 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Pimpinan</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->pimpinan_iduka }}</span>
                        </div>
                        
                    </div>
                
                </div>
                <div class="flex justify-between rounded-lg bg-white mt-2 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Alamat IDUKA</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->alamat_iduka }}</span>
                        </div>
                        
                    </div>
                
                </div>
                <div class="flex justify-between rounded-lg bg-white mt-2 h-10 ">
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start px-16">
                            <span class="font-bold">Telepon IDUKA</span>
                        </div>
                        
                    </div>
                    <div class="text-xl text-black p-1 w-4/5">
                        <div class="grid justify-items-start">
                            <span class="font-medium"> <span class="font-bold pr-10">:</span>{{ $item->telp_iduka }}</span>
                        </div>
                        
                    </div>
                
                </div>
                
            </div>
        </div> 
        @endforeach

        @foreach ($datapengajuan as $validasi)
            <input type="checkbox" id="validasi{{$validasi->id_pengajuan}}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-full max-w-2xl bg-[#2D5EBB]">
                    <label for="validasi{{$validasi->id_pengajuan}}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                    <h3 class="text-lg font-bold text-[#ffffff] text-center">DATA KONFIRMASI PENGAJUAN</h3>    
                        <div class="flex justify-between mt-5">
                            <div class="form-control w-full max-w-sm mr-2">
                            <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">Wali kelas</span></label>
                            @switch($validasi->konfirmasi_walas)
                                @case('Konfirmasi Diterima')
                                <span class="rounded-lg bg-success py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Dikonfirmasi</span>
                                </span>
                                @break

                                @case('Belum Dikonfirmasi')
                                <span class="rounded-lg bg-warning py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">wait</span> 
                                </span>
                                @break

                                @case('Konfirmasi Ditolak')
                                <span class="rounded-lg bg-error py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Ditolak</span>
                                </span>
                                @break
                                
                                @endswitch
                            </div>
                            <div class="form-control w-full max-w-sm">
                            <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">ADMIN KEUANGAN</span></label>
                            @switch($validasi->konfirmasi_admkeu)
                                @case('Konfirmasi Diterima')
                                <span class="rounded-lg bg-success py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Dikonfirmasi</span>
                                </span>
                                @break

                                @case('Belum Dikonfirmasi')
                                <span class="rounded-lg bg-warning py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">wait</span> 
                                </span>
                                @break

                                @case('Konfirmasi Ditolak')
                                <span class="rounded-lg bg-error py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Ditolak</span>
                                </span>
                                @break
                                
                                @endswitch
                            </div>
                        </div>

                        <div class="flex justify-between mt-5">
                            <div class="form-control w-full max-w-sm mr-2">
                            <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">Waka hubin</span></label>
                            @switch($validasi->konfirmasi_wkhubin)
                                @case('Konfirmasi Diterima')
                                <span class="rounded-lg bg-success py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Dikonfirmasi</span>
                                </span>
                                @break

                                @case('Belum Dikonfirmasi')
                                <span class="rounded-lg bg-warning py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">wait</span> 
                                </span>
                                @break

                                @case('Konfirmasi Ditolak')
                                <span class="rounded-lg bg-error py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Ditolak</span>
                                </span>
                                @break
                                
                                @endswitch
                            </div>
                            <div class="form-control w-full max-w-sm">
                            <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">kepala program</span></label>
                            @switch($validasi->konfirmasi_kaprog)
                                @case('Konfirmasi Diterima')
                                <span class="rounded-lg bg-success py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Dikonfirmasi</span>
                                </span>
                                @break

                                @case('Belum Dikonfirmasi')
                                <span class="rounded-lg bg-warning py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">wait</span> 
                                </span>
                                @break

                                @case('Konfirmasi Ditolak')
                                <span class="rounded-lg bg-error py-3 text-center text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block w-10 h-10 text-white"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" /></svg>
                                    <span class="text-center text-2xl px-3">Ditolak</span>
                                </span>
                                @break
                                
                                @endswitch
                            </div>
                        </div>
                        @if($validasi->konfirmasi_admkeu == "Belum Dikonfirmasi")
                        <div class="flex justify-center mt-5">
                            <div class="form-control w-full max-w-sm">
                                <svg fill="none" class="text-[#E63946] w-1/4 mx-auto" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"></path>
                                </svg>
                                <div class="text-center">
                                <h3 class="font-bold text-2xl text-white">Anda yakin ingin konfirmasi ?</h3>
                                </div>
                                <div class="flex justify-center pt-4 gap-x-20 gap-y-3">
                                    <a href="/admkeu/tolak/{{$validasi->id_pengajuan}}">
                                        <label class="btn btn-ghost btn-base bg-error w-36 text-white text-base hover:bg-error hover:bg-opacity-70">
                                        Tolak
                                    </a>
                                    <a href="/admkeu/setuju/{{$validasi->id_pengajuan}}">
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
    </div>
</div>
@endsection
