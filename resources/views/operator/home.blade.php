@extends('layouts.main')
@section('container')

<div class="flex bg-gray-100">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('operator.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
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


        <!-- <div class="flex justify-between my-2">
            <div class="w-full max-w-2xl h-full max-h-64 card border border-white hover:bg-[#417EF2] bg-[#2D5EBB] rounded-lg shadow mr-2">
                <a href="{{ route('operator.profile') }}">
                    <div class="flex justify-center h-full p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 text-white"><path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="card-body bg-white rounded-lg bg-opacity-30">
                        <h5 class="text-2xl font-bold tracking-tight text-white text-center">PROFILE</h5>
                    </div>
                </a>
            </div>
            <div class="w-full max-w-2xl h-full max-h-64 card border border-white hover:bg-[#417EF2] bg-[#2D5EBB] rounded-lg shadow">
                <a href="{{ route('operator.siswa') }}">
                    <div class="flex justify-center h-full p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 text-white"><path fill-rule="evenodd" d="M19.5 21a3 3 0 003-3V9a3 3 0 00-3-3h-5.379a.75.75 0 01-.53-.22L11.47 3.66A2.25 2.25 0 009.879 3H4.5a3 3 0 00-3 3v12a3 3 0 003 3h15zm-6.75-10.5a.75.75 0 00-1.5 0v4.19l-1.72-1.72a.75.75 0 00-1.06 1.06l3 3a.75.75 0 001.06 0l3-3a.75.75 0 10-1.06-1.06l-1.72 1.72V10.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="card-body bg-white rounded-lg bg-opacity-30">
                        <h5 class="text-2xl font-bold tracking-tight text-white text-center">SISWA</h5>
                    </div>
                </a>
            </div>
            
        </div> -->

        <div class="flex justify-between ">
            <div class="w-full max-w-lg h-full max-h-60 card border border-white hover:bg-[#417EF2] bg-[#2D5EBB] rounded-lg shadow mr-2">
                <a href="{{ route('operator.profile') }}">
                    <div class="flex justify-center h-full p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 text-white"><path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" /><path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zm9.586 4.594a.75.75 0 00-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.116-.062l3-3.75z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="card-body bg-white rounded-lg bg-opacity-30">
                        <h5 class="text-2xl font-bold tracking-tight text-white text-center">PROFILE</h5>
                    </div>
                </a>
            </div>
            <div class="w-full max-w-lg h-full max-h-60 card border border-white hover:bg-[#417EF2] bg-[#2D5EBB] rounded-lg shadow mr-2">
                <a href="{{ route('operator.siswa') }}">
                    <div class="flex justify-center h-full p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 text-white"><path fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" /><path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" /></svg>
                    </div>
                    <div class="card-body bg-white rounded-lg bg-opacity-30">
                        <h5 class="text-2xl font-bold tracking-tight text-white text-center">SISWA</h5>
                    </div>
                </a>
            </div>
            <div class="w-full max-w-lg h-full max-h-60 card border border-white hover:bg-[#417EF2] bg-[#2D5EBB] rounded-lg shadow">
                <a href="{{ route('operator.pbsekolah') }}">
                    <div class="flex justify-center h-full p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 text-white"><path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="card-body bg-white rounded-lg bg-opacity-30">
                        <h5 class="text-2xl font-bold tracking-tight text-white text-center">PB SEKOLAH</h5>
                    </div>
                </a>
            </div>
        </div>

        <div class="flex justify-between ">
            <div class="w-full max-w-lg h-full max-h-60 card border border-white hover:bg-[#417EF2] bg-[#2D5EBB] rounded-lg shadow mr-2">
                <a href="{{ route('operator.pbiduka') }}">
                    <div class="flex justify-center h-full p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 text-white"><path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" /><path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zm9.586 4.594a.75.75 0 00-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.116-.062l3-3.75z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="card-body bg-white rounded-lg bg-opacity-30">
                        <h5 class="text-2xl font-bold tracking-tight text-white text-center">PB IDUKA</h5>
                    </div>
                </a>
            </div>
            <div class="w-full max-w-lg h-full max-h-60 card border border-white hover:bg-[#417EF2] bg-[#2D5EBB] rounded-lg shadow mr-2">
                <a href="{{ route('operator.monitoring') }}">
                    <div class="flex justify-center h-full p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 text-white"><path fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" /><path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" /></svg>
                    </div>
                    <div class="card-body bg-white rounded-lg bg-opacity-30">
                        <h5 class="text-2xl font-bold tracking-tight text-white text-center">MONITORING</h5>
                    </div>
                </a>
            </div>
            <div class="w-full max-w-lg h-full max-h-60 card border border-white hover:bg-[#417EF2] bg-[#2D5EBB] rounded-lg shadow">
                <a href="{{ route('operator.nilai') }}">
                    <div class="flex justify-center h-full p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 text-white"><path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="card-body bg-white rounded-lg bg-opacity-30">
                        <h5 class="text-2xl font-bold tracking-tight text-white text-center">NILAI</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection





