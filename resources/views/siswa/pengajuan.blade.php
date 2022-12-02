@extends('layouts.main')
@section('container')


<div class="flex bg-gray-100">
    <div class="sidebar">
        <div class="bg-gradient-to-b from-blue-700 to-stone-900 h-screen p-5 pt-6 w-72 relative">
            <h3 class="text-base font-bold text-orange-400 text-2xl pl-7">ONE<span class="block">PRAKTIK.in</span></h3>
            <div class="pt-10 text-center text-xl text-white">Profile</div>
            <div class="pt-10 text-center text-xl text-white">Pengajuan</div>
            <div class="pt-10 text-center text-xl text-white">Prakerin</div>
            <div class="pt-10 text-center text-xl text-white">Presensi</div>
            <div class="pt-10 text-center text-xl text-white">Kegiatan</div>
            <div class="pt-10 text-center text-xl text-white">Verifikasi</div>
            <div class="pt-20 text-center text-xl text-white"><button class="bg-gradient-to-b from-orange-500 to-red-500 hover:bg-orange-700 py-2 px-9 rounded-lg">Logout</button></div>
        </div>
    </div>
    <div class="p-7 w-full justify-center items-center">
        <!-- <div class="bg-gradient-to-r from-blue-700 to-stone-900 h-52 rounded-lg "> -->
        <div class="grid gap-4 gird-cols-2">
            <h3 class="text-2xl font-bold text-blue-700">DATA PENGAJUAN</h3>
            <div class="flex justify-end">
                <button class="px-4 py-2 rounded-md bg-blue-700 hover:bg-blue-900 font-bold text-white">Tambah Pengajuan</button>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden rounded-lg">
                    <table class="min-w-full text-center rounded-box">
                    <thead class="border-b">
                        <tr class="bg-blue-700">
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            No
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            ID Pengajuan
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Status
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Aksi
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b bg-white boder-gray-900">
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Dark
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Cell
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Cell
                        </td>
                        <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                            <div class="flex justify-center">
                                <div class="px-4 py-4">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    </a>
                                </div>
                                <div class="px-4 py-4">
                                    <a href="#" class="text-gray-600 hover:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    </a>
                                </div>
                                <div class="px-4 py-4">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg></a>
                                </div>
                            </div>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        
        </div>
    </div>
  <!-- The button to open modal -->
<label for="my-modal-5" class="btn">open modal</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-5" class="modal-toggle" />
<div class="modal">
  <div class="modal-box w-11/12 max-w-5xl">
    <h3 class="font-bold text-lg text-white">Form Pengajuan</h3>
    <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
            <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Nama Siswa</label>
            <input
            type="text"
            class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            "
            id="exampleFormControlInput1"
            placeholder="Nama Siswa"
            />

            <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">NIS</label>
            <input
            type="number"
            class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            "
            id="exampleFormControlInput1"
            placeholder="NIS"
            />
        </div>
    </div>
    <div class="modal-action">
      <label for="my-modal-5" class="btn">Yay!</label>
    </div>
  </div>
</div>
@endsection