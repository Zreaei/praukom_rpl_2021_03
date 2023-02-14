@extends('layouts.main')
@section('container')


<div class="flex bg-gray-100">
<aside class="w-72" aria-label="Sidebar">
    <div class="fixed px-5 py-4 overflow-y-auto w-56 bg-gray-50 h-screen bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <ul class="space-y-2">
            <h3 class="font-bold text-[#FFA434] text-2xl pl-7 mb-10">ONE<span class="block">PRAKTIK.in</span></h3>
            <li>
                <a href="{{ route('siswa.pengajuan') }}" class="flex items-center p-2 text-xl font-bold text-[#ffffff] rounded-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8"><path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" /></svg>
                <span class="ml-3">Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('siswa.pengajuan') }}" class="flex items-center p-2 text-xl font-bold text-[#ffffff] rounded-lg hover:bg-[#ffffff] hover:bg-opacity-30 active:bg-[#ffffff] active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30 mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8"><path fill-rule="evenodd" d="M19.5 21a3 3 0 003-3V9a3 3 0 00-3-3h-5.379a.75.75 0 01-.53-.22L11.47 3.66A2.25 2.25 0 009.879 3H4.5a3 3 0 00-3 3v12a3 3 0 003 3h15zm-6.75-10.5a.75.75 0 00-1.5 0v4.19l-1.72-1.72a.75.75 0 00-1.06 1.06l3 3a.75.75 0 001.06 0l3-3a.75.75 0 10-1.06-1.06l-1.72 1.72V10.5z" clip-rule="evenodd" /></svg>
                <span class="ml-3">Pengajuan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('siswa.prakerin') }}" class="flex items-center p-2 text-xl font-bold text-[#ffffff] rounded-lg hover:bg-[#ffffff] hover:bg-opacity-30 active:bg-[#ffffff] active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30 mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8"><path fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" /><path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" /></svg>
                <span class="ml-3">Prakerin</span>
                </a>
            </li>
            <li>
                <a href="{{ route('siswa.presensi') }}" class="flex items-center p-2 text-xl font-bold text-[#ffffff] rounded-lg hover:bg-[#ffffff] hover:bg-opacity-30 active:bg-[#ffffff] active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30 mt-8 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8"><path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" /><path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zm9.586 4.594a.75.75 0 00-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.116-.062l3-3.75z" clip-rule="evenodd" /></svg>
                <span class="ml-3">Presensi</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-xl font-bold text-[#ffffff] mt-8  rounded-lg hover:bg-[#ffffff] hover:bg-opacity-30 active:bg-[#ffffff] active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8"><path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                <span class="ml-3">Verifikasi</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 ml-7 text-xl font-bold text-[#ffffff] rounded-lg hover:bg-gradient-to-b from-[#FFA434] to-[#D24E16] absolute insert-x-1 bottom-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8"><path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" /></svg>
                <span class="ml-3 ">Logout</span>
                </a>
            </li>

        </ul>
    </div>
    </aside>
    <div class="container">

        <div class="p-7 w-full justify-center items-center ">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA PRESENSI</h3>
                </div>
                <div>
                    <!-- The button to open modal -->
                    <!-- <label for="tambah-pengajuan" class="btn bg-kahfi hover:bg-[#2D5EBB] text-white font-bold py-2 px-4 border-b-4 border-[#2D5EBB] hover:border-kahfi rounded text-lg">Tambah</label> -->
                    <a href="{{ route('siswa.tambahpresensi') }}" class="btn bg-kahfi hover:bg-[#2D5EBB] text-white font-bold py-2 px-4 border-b-4 border-[#2D5EBB] hover:border-kahfi rounded text-lg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" /></svg></a>
                </div>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-white">
                    <!-- head -->
                    <thead class="text-xs text-center text-gray-700 uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-6 py-3 ">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                Keterangan
                            </th> 
                            <th scope="col" class="px-6 py-3 ">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                Foto
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                        @foreach ($presensi as $item)
                        <tr class="bg-white ">
                            <td class="text-sm text-item font-semibold px-6 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-6 py-4 text-center">
                                {{ $item->status_agenda }}
                            </td>
                            <td class="text-sm text-item font-semibold px-6 py-4 text-center">
                                {{ $item->keterangan_agenda }}
                            </td>
                            <td class="text-sm text-item font-semibold px-6 py-4 text-center">
                                {{ $item->tgl_agenda }}
                            </td>
                           <td class="text-sm text-item font-semibold px-6 py-4 text-center">
                                <img src="{{ asset('storage/img/' . $item->foto) }}" id="gambar" alt="Foto Agenda" style="width:100px">
                            </td>
                            
                            <!-- icon Aksi -->
                            <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                <div class="flex justify-center">
                                    <div class="px-4 py-4">
                                        <a href="/siswa/editpresensi/{{$item->id_agenda}}" class="text-[#2D5EBB] hover:text-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                        </a>
                                    </div>
                                    <div class="px-4 py-4">
                                        <a href="#" class="text-jemjem hover:text-gray-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                        </a>
                                    </div>
                                    <div class="px-4 py-4">
                                        <a href="/siswa/hapuspresensi/{{$item->id_agenda}}"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-merah hover:text-opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg></a>
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
  
@endsection