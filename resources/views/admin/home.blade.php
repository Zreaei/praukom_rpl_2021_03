@extends('layouts.main')
@section('container')

<div class="fixed w-20 mt-10 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
    <a href="{{ route('login.logout') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" /></svg>
    </a>
</div>

{{-- <div class="fixed">
    @auth
        <span class="mx-5 transition">
            {{Auth::user()->username}}
            -
            {{Auth::user()->level_user->nama_level}}
        </span>
    @endauth
</div> --}}

<div class="text-center flex">
    <div class="mx-auto">
        <div class="flex gap-7 justify-center m-5">
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
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Walas
                    </a>
                </div>
            </div>
                
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Kaprog
                    </a>
                </div>
            </div>
                
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="admin/data-admku" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
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
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Waka Hubin
                    </a>
                </div>
            </div>
            
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Pembimbing Sekolah
                    </a>
                </div>
            </div>
        
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Pembimbing IDUKA
                    </a>
                </div>
            </div>
                
            <div class="w-44 p-6 bg-white border-gray-200 rounded-lg shadow-md dark:border-gray-700">
                <div class="text-center">
                    <iconify-icon icon="healthicons:ui-user-profile" style="color: #1565c0;" width="100" height="100"></iconify-icon>
                </div>
                <div class="text-center">
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                        Data Verifikator
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="gap-7 m-5">
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

@endsection