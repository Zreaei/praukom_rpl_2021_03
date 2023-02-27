@extends('layouts.main')
@section('container')


<div class="">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('pbiduka.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="flex justify-center">

        <div class="px-28 py-7 w-full justify-center items-center ">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA PRAKERIN SISWA</h3>
                </div>
            </div>
            <!-- Table pengajuan -->

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class=" py-4 ">
                                No
                            </th>
                            <th scope="col" class="py-4 ">
                                Siswa
                            </th>
                            <th scope="col" class="py-4 ">
                                Presensi
                            </th> 
                            <th scope="col" class="py-4 ">
                                Kegiatan
                            </th>
                            <th scope="col" class="py-4 ">
                                Penilaian
                            </th>
                            <!-- <th scope="col" class="py-4 ">
                                Lulus/Tidak
                            </th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                    @foreach ($dataprakerin as $a)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold  py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold  py-4 text-center">
                                <label for="detail-siswa{{$a->nis}}" type="button" class="text-[#ffffff] bg-[#0029FF] hover:bg-opacity-50 focus:outline-none focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5">Data Siswa</label>          
                            </td>
                            <td class="text-sm text-item font-semibold  py-4 text-center">
                                <a href="/pbiduka/presensi">
                                    <label type="button" class="text-[#ffffff] bg-[#09C4FF] hover:bg-opacity-50 focus:outline-none focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5">Data Presensi</label>          
                                </a>
                            </td>
                            <td class="text-sm text-item font-semibold  py-4 text-center">
                                <a href="/pbiduka/kegiatan">
                                    <label type="button" class="text-[#ffffff] bg-[#FFA434] hover:bg-opacity-50 focus:outline-none focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5">Data Kegiatan</label>          
                                </a>
                            </td>
                            <td class="text-sm text-item font-semibold  py-4">
                                <div class="flex justify-center">
                                    <div >
                                        <a href="#" class="text-[#2D5EBB] hover:text-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <!-- <td class="text-sm font-medium leading-5 text-center [#ffffff]space-no-wrap ">
                                <div class="flex justify-center">
                                    <div class="px-4 py-4">
                                        <label for="validasi{{ $a->id_prakerin }}" class="text-[#2D5EBB] hover:text-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10"><path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5zm6.61 10.936a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                            <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" /></svg>
                                        </label>
                                    </div>
                                </div>
                            </td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        

    </div>
</div>
@endsection

@section('modal')
    <!-- Modal Detail Data Siswa -->
    @foreach ($dataprakerin as $item)
        <input type="checkbox" id="detail-siswa{{$item->nis}}" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                <label for="detail-siswa{{$item->nis}}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
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

    <!-- @foreach ($dataprakerin as $validasi)
            <input type="checkbox" id="validasi{{$validasi->id_prakerin}}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-full max-w-2xl bg-[#2D5EBB]">
                    <label for="validasi{{$validasi->id_prakerin}}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                    <h3 class="text-lg font-bold text-[#ffffff] text-center">DATA KONFIRMASI PRAKERIN</h3>    
                        <div class="flex justify-between mt-5">
                            <div class="form-control w-full max-w-2xl mr-2">
                            <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">Pembimbing Perusahaan</span></label>
                            @switch($validasi->status_prakerin)
                                @case('belum lulus')
                                <span class="rounded-lg bg-warning px-5 py-3 text-white font-bold uppercase">
                                    <span class="text-center text-2xl px-3">Proses Prakerin</span>
                                </span>
                                @break

                                @case('sudah lulus')
                                <span class="rounded-lg bg-success px-5 py-3 text-white font-bold uppercase">
                                    <span class="text-center text-2xl px-3">Lulus</span>
                                </span>
                                @break

                                @case('tidak lulus')
                                <span class="rounded-lg bg-error px-5 py-3 text-white font-bold uppercase">
                                    <span class="text-center text-2xl px-3">Tidak Lulus</span>
                                </span>
                                @break

                                @endswitch
                            </div>
                        </div>
                        @if($validasi->status_prakerin == "belum lulus")
                        <div class="flex justify-center mt-5">
                            <div class="form-control w-full max-w-sm">
                                <svg fill="none" class="text-[#E63946] w-1/4 mx-auto" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"></path>
                                </svg>
                                <div class="text-center">
                                <h3 class="font-bold text-2xl text-white">Lulus / Tidak?</h3>
                                </div>
                                <div class="flex justify-center pt-4 gap-x-20 gap-y-3">
                                    <a href="/pbiduka/tidaklulus/{{$validasi->id_prakerin}}">
                                        <label class="btn btn-ghost btn-base bg-error w-36 text-white text-base hover:bg-error hover:bg-opacity-70">
                                        Tidak Lulus
                                    </a>
                                    <a href="/pbiduka/lulus/{{$validasi->id_prakerin}}">
                                        <label class="btn btn-ghost btn-base bg-success w-36 text-white text-base hover:bg-success hover:bg-opacity-70">
                                        Lulus
                                    </a>
                                </div>
                            </div>
                        </div>
                            @else

                        @endif
                </div>
            </div>
            @endforeach -->
@endsection