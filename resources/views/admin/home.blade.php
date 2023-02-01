@extends('layouts.main')
@section('container')

<div>
    <div class="text-center">
        <div class="text-center m-8 bg-white w-1/2 mx-auto font-medium rounded">        
            Notifikasi Terkini
        </div>
        <div class="inline-block">
            <div class="flex gap-5 justify-center m-3">
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
            
            <div class="flex gap-5 justify-center m-3">
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
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                            Data AdmKeu
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="flex gap-5 justify-center m-3">
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
        
    
        <div class="inline-block pl-20">
            <div class="flex gap-5 justify-center m-3">
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
    
            <div class="flex gap-5 justify-center m-3">
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
            
            <div class="flex gap-5 justify-center m-3">
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
</div>

@endsection