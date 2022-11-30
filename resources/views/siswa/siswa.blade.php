@extends('layouts.main')
@section('container')
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    NO
                </th>
                <th scope="col" class="py-3 px-6">
                    NIS
                </th>
                <th scope="col" class="py-3 px-6">
                    NAMA
                </th>
                <th scope="col" class="py-3 px-6">
                    TEMPAT LAHIR
                </th>
                <th scope="col" class="py-3 px-6">
                    TANGGAL LAHIR
                </th>
                <th scope="col" class="py-3 px-6">
                    NO TELP
                </th>
                <th scope="col" class="py-3 px-6">
                    KELAS
                </th>
                <th scope="col" class="py-3 px-6">
                    EDIT
                </th>
                <th scope="col" class="py-3 px-6">
                    HAPUS
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th class="py-4 px-6">
                    no
                </th>
                <td class="py-4 px-6">
                    nis
                </td>
                <td class="py-4 px-6">
                    nama_siswa
                </td>
                <td class="py-4 px-6">
                    tempat_lahir
                </td>
                <td class="py-4 px-6">
                    tgl_lahir
                </td>
                <td class="py-4 px-6">
                    telp_siswa
                </td>
                <td class="py-4 px-6">
                    kelas
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="btn btn-yellow">Edit</a>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="btn btn-red">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection