@extends('layouts.main')
@section('container')

<div class="flex bg-gray-100">
    <div class="absolute w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('kaprog.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="p-10 justify-center items-center w-full">
        <div class="grid justify-items-center">
            <div class="text-3xl font-bold text-[#2D5EBB]">
                <h1>PRAKERIN SMKN 1 KOTA BEKASI</h1>
            </div>
            <div class="text-2xl font-bold text-[#FFA434]">
                <h1>ONE PRAKTIK.in</h1>
            </div>
        </div>

        <div class="flex justify-between my-2">
            <div class="w-full max-w-2xl h-full max-h-64 card border border-white hover:bg-[#417EF2] bg-[#2D5EBB] rounded-lg shadow mr-2">
                <a href="{{ route('kaprog.profile') }}">
                    <div class="flex justify-center h-full p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 text-white"><path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="card-body bg-white rounded-lg bg-opacity-30">
                        <h5 class="text-2xl font-bold tracking-tight text-white text-center">PROFILE</h5>
                    </div>
                </a>
            </div>
            <div class="w-full max-w-2xl h-full max-h-64 card border border-white hover:bg-[#417EF2] bg-[#2D5EBB] rounded-lg shadow">
                <a href="{{ route('kaprog.pengajuan') }}">
                    <div class="flex justify-center h-full p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 text-white"><path fill-rule="evenodd" d="M19.5 21a3 3 0 003-3V9a3 3 0 00-3-3h-5.379a.75.75 0 01-.53-.22L11.47 3.66A2.25 2.25 0 009.879 3H4.5a3 3 0 00-3 3v12a3 3 0 003 3h15zm-6.75-10.5a.75.75 0 00-1.5 0v4.19l-1.72-1.72a.75.75 0 00-1.06 1.06l3 3a.75.75 0 001.06 0l3-3a.75.75 0 10-1.06-1.06l-1.72 1.72V10.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="card-body bg-white rounded-lg bg-opacity-30">
                        <h5 class="text-2xl font-bold tracking-tight text-white text-center">PENGAJUAN</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection





