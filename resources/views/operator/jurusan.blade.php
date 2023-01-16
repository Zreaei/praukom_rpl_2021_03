@extends('layouts.main')
@section('container')
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6">
                    NO
                </th>
                <th scope="col" class="py-3 px-6">
                    ID JURUSAN
                </th>
                <th scope="col" class="py-3 px-6">
                    NIP KAPROG
                </th>
                <th scope="col" class="py-3 px-6">
                    BIDANG KEAHLIAN
                </th>
                <th scope="col" class="py-3 px-6">
                    PROGRAM KEAHLIAN
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
            <tr class="bg-white border-b">
                <th class="py-4 px-6">
                    no
                </th>
                <td class="py-4 px-6">
                    id_jurusan
                </td>
                <td class="py-4 px-6">
                    kaprog
                </td>
                <td class="py-4 px-6">
                    bidang_keahlian
                </td>
                <td class="py-4 px-6">
                    program_keahlian
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