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
        <div class="bg-gradient-to-r from-blue-700 to-stone-900 h-52 rounded-lg ">
            <div class="grid grid-rows-3 grid-flow-col gap-4">
                <div class="row-span-3 p-6 "><img class=" w-40 h-40 rounded-full" src="{{ asset('img/people.jpg')}}"></div>
                <div class="col-span-2 p-10 text-base  pl-28 font-bold text-white text-5xl"><h3>John Doe</h3></div>
                <div class="row-span-2 col-span-2 text-2xl font-bold text-white"><span class="bg-gradient-to-b from-orange-500 to-red-500 px-44 py-2 rounded-lg ">SISWA</span></div>
            </div>
        </div>
        <div class="pt-8">
            <table class="border-separate border-spacing-2 border border-slate-400">
                <tbody>
                    <tr class="w-full bg-white ">
                        <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                        <td>Malcolm Lockyer</td>
                    </tr>
                    <tr>
                        <td>Witchy Woman</td>
                        <td>The Eagles</td>
                    </tr>
                    <tr>
                        <td>Shining Star</td>
                        <td>Earth, Wind, and Fire</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection