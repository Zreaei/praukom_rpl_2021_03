@extends('layouts.main')
@section('title', 'admkeu')
@section('container')




<div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">DETAIL DATA</span>
                </label>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left ">
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    ID ADM KEUANGAN
                </th>
                <td class="px-6 py-4">
                    {{ $detail[0]->id_admkeu }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    NAMA LENGKAP
                </th>
                <td class="px-6 py-4">
                    {{ $detail[0]->nama_admkeu }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    ID USER
                </th>
                <td class="px-6 py-4">
                    {{ $detail[0]->id_user }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    USERNAME
                </th>
                <td class="px-6 py-4">
                    {{ $detail[0]->username }}
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    EMAIL
                </th>
                <td class="px-6 py-4">
                    {{ $detail[0]->email }}
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    FOTO
                </th>
                <td class="px-6 py-4">
                    {{ $detail[0]->foto_user }}
                </td>
            </tr>
        </tbody>
    </table>
</div>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <a href="/operator/admkeu"><button type="button" class="btn btn-warning">KEMBALI</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection