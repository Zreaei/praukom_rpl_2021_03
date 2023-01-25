@extends('layouts.main')
@section('container')


<div class="flex bg-gray-100">
    <aside class="w-64" aria-label="Sidebar">
    <div class="px-3 py-4 overflow-y-auto bg-gray-50 h-screen bg-gradient-to-b from-blue-700 to-stone-900">
        <ul class="space-y-2">
            <h3 class="font-bold text-orange-400 text-2xl pl-7 mb-10">ONE<span class="block">PRAKTIK.in</span></h3>
            <li>
                <a href="#" class="flex items-center p-2 text-xl font-bold text-white rounded-lg hover:bg-blue-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
                <span class="ml-3">PROFIL</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-xl font-bold text-white rounded-lg hover:bg-blue-600 mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" /></svg>
                <span class="ml-3">PENGAJUAN</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 ml-7 text-xl font-bold text-white rounded-lg hover:bg-gradient-to-b from-orange-500 to-red-500 absolute insert-x-1 bottom-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" /></svg>
                <span class="ml-3 ">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    </aside>
    <div class="container">
        <div class="p-7 w-full justify-center items-center ">
            <!-- <div class="bg-gradient-to-r from-blue-700 to-stone-900 h-52 rounded-lg "> -->
            <div class="grid gird-cols-2">
                <h3 class="text-2xl font-bold text-blue-700">DATA PENGAJUAN</h3>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden rounded-lg">
                            <table class="min-w-full text-center rounded-box">
                            <thead class="border-b">
                                <tr class="bg-blue-700">
                                    <th scope="col" class="text-sm font-medium text-white px-2 py-4">
                                        No
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        ID Pengajuan
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Siswa
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        IDUKA
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Konfirmasi
                                    </th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                            ?>
                                @foreach ($pengajuan as $item)
                            <tbody>
                                    <tr class="border-b bg-white boder-gray-900">
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $no++ }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $item->id_pengajuan }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a href="#"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                                Detail Siswa
                                            </button></a>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $item->tgl_pengajuan }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a href="#"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                                Lihat
                                            </button></a>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a href="#"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                                Konfirmasi
                                            </button></a>
                                        </td>
                                    </tr>
                            </tbody>
                            @endforeach
                            </table>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            </div>
        </div>
    </div>
@endsection
