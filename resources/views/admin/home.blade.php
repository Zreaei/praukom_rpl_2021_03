@extends('layouts.main')
@section('container')

<div class="text-center flex">
    <aside class="w-64" aria-label="Sidebar">
        <div class="px-3 py-4 overflow-y-auto min-h-full bg-gray-50 bg-gradient-to-b from-blue-700 to-stone-900">
            <ul class="space-y-2">
                <h3 class="font-bold text-orange-400 text-2xl pl-7 mb-10">ONE<span class="block">PRAKTIK.in</span></h3>
                <li>
                    <a href="admin/data-kelas" class="flex items-center p-2 text-xl font-bold text-white rounded-lg hover:bg-blue-600 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" /><path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zm9.586 4.594a.75.75 0 00-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.116-.062l3-3.75z" clip-rule="evenodd" /></svg>
                    <span class="ml-3">Data Kelas</span>
                    </a>
                </li>
                <li>
                    <a href="admin/data-jurusan" class="flex items-center p-2 text-xl font-bold text-white rounded-lg hover:bg-blue-600 mt-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" /><path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zm9.586 4.594a.75.75 0 00-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.116-.062l3-3.75z" clip-rule="evenodd" /></svg>
                    <span class="ml-3">Data Jurusan</span>
                    </a>
                </li>
                <li>
                    <a href="admin/data-angkatan" class="flex items-center p-2 text-xl font-bold text-white rounded-lg hover:bg-blue-600 mt-8 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" /><path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zm9.586 4.594a.75.75 0 00-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.116-.062l3-3.75z" clip-rule="evenodd" /></svg>
                    <span class="ml-3">Data Angkatan</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#" class="flex items-center text-xl font-bold text-white rounded-lg hover:bg-gradient-to-b from-orange-500 to-red-500 bottom-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" /></svg>
                    <span class="ml-3">Logout</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </aside>
    
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
</div>

@endsection