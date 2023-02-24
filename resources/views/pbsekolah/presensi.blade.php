@extends('layouts.main')
@section('container')


<div class="flex gap-5">
    <div class="w-40 p-6 bg-white border border-gray-200 rounded-lg shadow-md">
        <div class="text-center">
            <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
        </div>
        <div class="text-center">
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 mt-2">
                Views
            </a>
        </div>
    </div>
    
    <div class="w-40 p-6 bg-white border border-gray-200 rounded-lg shadow-md">
        <div class="text-center">
            <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
        </div>
        <div class="text-center">
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 mt-2">
                Data Level
            </a>
        </div>
    </div>
</div>

@endsection