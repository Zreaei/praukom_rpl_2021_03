@extends('layouts.main')
@section('container')

<div class="navbar fixed flex justify-between bg-white shadow-lg">
    <a href="/admin" class="btn btn-ghost normal-case text-xl">Praktik.In</a>
    <div class="">
        @auth
            <span class="font-semibold normal-case text-xl mx-5 transition">
                {{Auth::user()->username}}
                -
                {{Auth::user()->level_user->nama_level}}
            </span>
        @endauth
    </div>
    <div class="rounded-xl bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('login.logout') }}" class="p-3 text-xl font-bold text-[#ffffff] hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
           Keluar
        </a>
    </div>
</div>

<div class="flex justify-center">
    <div class="mt-16">
        <div class="flex gap-7 m-5">
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Views
                    </a>
                </div>
            </div>
    
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-level" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Level
                    </a>
                </div>
            </div>
    
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-user" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data User
                    </a>
                </div>
            </div>
            
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-op" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Operator
                    </a>
                </div>
            </div>
        </div>
        
        <div class="flex gap-7 justify-center m-5">
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-siswa" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Siswa
                    </a>
                </div>
            </div>
            
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-walas" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Walas
                    </a>
                </div>
            </div>
                
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-kaprog" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Kaprog
                    </a>
                </div>
            </div>
                
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-admkeu" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data AdmKeu
                    </a>
                </div>
            </div>
        </div>
        
        <div class="flex gap-7 justify-center m-5">
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-wkhubin" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Waka Hubin
                    </a>
                </div>
            </div>
            
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-pbsekolah" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Pembimbing Sekolah
                    </a>
                </div>
            </div>
        
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-pbiduka" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Pembimbing IDUKA
                    </a>
                </div>
            </div>
                
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-verifikator" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Verifikator
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-16 pl-14">
        <div class="m-5">
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-kelas" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Kelas
                    </a>
                </div>
            </div>
        </div>
            
        <div class="m-5">
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-jurusan" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Jurusan
                    </a>
                </div>
            </div>
        </div>
        
        <div class="m-5">
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-angkatan" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Angkatan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection