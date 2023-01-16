@extends('layouts.main')
@section('container')

<div class="flex gap-5">
    <div class="w-40 p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="text-center">
            <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
        </div>
        <div class="text-center">
            <a href="/operator/admkeu" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                Data ADM Keuangan
            </a>
        </div>
    </div>
    
    <div class="w-40 p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="text-center">
            <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
        </div>
        <div class="text-center">
            <a href="/operator/verifikator" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                Data Verifikator
            </a>
        </div>
    </div>
</div>

@endsection