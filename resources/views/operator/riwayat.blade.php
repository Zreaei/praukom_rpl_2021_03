@extends('layouts.main')
@section('container')


<div class="">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('operator.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="flex justify-center">

        <div class="px-28 py-7 w-full justify-center items-center ">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">RIWAYAT KELOLA SISWA</h3>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-7 py-4 ">
                                NO
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NAMA EVENT
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                WAKTU EVENT
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NIS
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NAMA SISWA
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                        @foreach ($riwayat_siswa as $item)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nama_event }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->waktu_event }}
                            </td>
                           <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nis }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nama_siswa }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">RIWAYAT KELOLA PB IDUKA</h3>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-7 py-4 ">
                                NO
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NAMA EVENT
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                WAKTU EVENT
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NIK
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NAMA PB IDUKA
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                        @foreach ($riwayat_pbiduka as $item)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nama_event }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->waktu_event }}
                            </td>
                           <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nik }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nama_pbiduka }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">RIWAYAT KELOLA PB SEKOLAH</h3>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-7 py-4 ">
                                NO
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NAMA EVENT
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                WAKTU EVENT
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NIP
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NAMA PB SEKOLAH
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                        @foreach ($riwayat_pbsekolah as $item)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nama_event }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->waktu_event }}
                            </td>
                           <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nip_pbsekolah }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nama_pbsekolah }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">RIWAYAT KELOLA VERIFIKATOR</h3>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-7 py-4 ">
                                NO
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NAMA EVENT
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                WAKTU EVENT
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NIP
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                NAMA VERIFIKATOR
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                        @foreach ($riwayat_verifikator as $item)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nama_event }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->waktu_event }}
                            </td>
                           <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nip_verifikator }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nama_verifikator }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
