@extends('layouts.main')
@section('container')

<div>
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('siswa.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
        </a>
    </div>
    @auth
    <div class="py-5 px-32 flex justify-between items-center w-full ">
        <div class="card bg-gradient-to-b from-[#2D5EBB] to-[#417EF2] shadow-xl ">
            <figure class="px-10 pt-10">
                <img src="https://mdbootstrap.com/img/new/slides/041.jpg" alt="Shoes" class="rounded-full w-60 h-60" />
            </figure>
            <div class="card-body items-center text-center h-80">
                <h2 class="card-title text-3xl text-white font-bold">M Danar Kahfi</h2>
                <h2 class="card-title text-lg pt-5 font-bold">Sebagai :</h2>
                <div class="card-actions py-2">
                    <div class="grid justify-items-center px-32 bg-gradient-to-b from-[#FFA434] to-[#D24E16] p-3 rounded-lg">
                        <span class="font-bold uppercase text-xl text-white">{{Auth::user()->level_user->nama_level}}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card w-full px-10">
            <div class="flex justify-between rounded-lg bg-white h-28 w-full ">
                <div class="text-2xl text-black py-10 w-2/5">
                    <div class="grid justify-items-start px-10">
                        <span class="font-bold">NIS</span>
                    </div>
                    
                </div>
                <div class="text-black py-10 w-96">
                    <div class="grid justify-items-start">
                        <span class="font-medium text-xl"> <span class="text-2xl font-bold pr-10">:</span>021989898989</span>
                    </div>
                    
                </div>
            
            </div>
            <div class="flex justify-between rounded-lg bg-white mt-2 h-28 w-full">
                <div class="text-2xl text-black py-10 w-2/5">
                    <div class="grid justify-items-start px-10">
                        <span class="font-bold">Username</span>
                    </div>
                    
                </div>
                <div class="text-2xl text-black py-10 w-96">
                    <div class="grid justify-items-start">
                        <span class="font-medium text-xl"><span class="text-2xl font-bold pr-10">:</span>{{Auth::user()->username}}</span>
                    </div>
                    
                </div>
            
            </div>
            <div class="flex justify-between rounded-lg bg-white mt-2 h-28 w-full">
                <div class="text-2xl text-black py-10 w-2/5">
                    <div class="grid justify-items-start px-10">
                        <span class="font-bold">Nama Lengkap</span>
                    </div>
                    
                </div>
                <div class="text-2xl text-black py-10 w-96">
                    <div class="grid justify-items-start">
                        <span class="font-medium text-xl"><span class="text-2xl font-bold pr-10">:</span>M Danar Kahfi</span>
                    </div>
                    
                </div>
            
            </div>
            <div class="flex justify-between rounded-lg bg-white mt-2 h-28 w-full">
                <div class="text-2xl text-black py-10 w-2/5">
                    <div class="grid justify-items-start px-10">
                        <span class="font-bold">Email</span>
                    </div>
                    
                </div>
                <div class="text-2xl text-black py-10 w-96">
                    <div class="grid justify-items-start">
                        <span class="font-medium text-xl"><span class="text-2xl font-bold pr-10">:</span>{{Auth::user()->email}}</span>
                    </div>
                    
                </div>
            
            </div>
            <div class="flex justify-between rounded-lg bg-white mt-2 h-28 w-full">
                <div class="text-2xl text-black py-10 w-2/5">
                    <div class="grid justify-items-start px-10">
                        <span class="font-bold">Telepon</span>
                    </div>
                    
                </div>
                <div class="text-2xl text-black py-10 w-96">
                    <div class="grid justify-items-start">
                        <span class="font-medium text-xl"><span class="text-2xl font-bold pr-10">:</span>087874588726</span>
                    </div>
                    
                </div>
            
            </div>
        </div>    
        
    </div>
    @endauth

    
</div>

@endsection





