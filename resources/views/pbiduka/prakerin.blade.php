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
@endsection