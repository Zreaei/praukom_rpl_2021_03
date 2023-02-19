@extends('layouts.main')
@section('container')

<div>
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('admkeu.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="py-5 px-32 justify-center items-center w-full">
        
        <div class="flex justify-between rounded-lg bg-[#2D5EBB] h-40 ">
            <div class="px-10 py-2">
                <img class="w-36 h-36 rounded-full" src="https://mdbootstrap.com/img/new/slides/041.jpg" alt="Rounded avatar">
            </div>
            <div class="text-4xl text-white pt-5 justify-center items-center w-4/5">
                <div class="grid justify-items-center">
                    <span class="font-bold">Bu Lia</span>
                </div>
                <div class="justify-center w-full mt-5 px-32">
                    <div class="grid justify-items-center bg-gradient-to-b from-[#FFA434] to-[#D24E16] p-3 rounded-lg">
                        <span class="font-semibold uppercase">Admin Keuangan</span>
                    </div>
                </div>
            </div>
        
        </div>

        <div class="flex justify-between rounded-lg bg-white mt-5 h-20 ">
            <div class="text-3xl text-black pt-5 w-4/5">
                <div class="grid justify-items-start px-16">
                    <span class="font-bold">NIS</span>
                </div>
                
            </div>
            <div class="text-3xl text-black pt-5 w-4/5">
                <div class="grid justify-items-start">
                    <span class="font-medium"> <span class="font-bold pr-10">:</span>021989898989</span>
                </div>
                
            </div>
        
        </div>
        <div class="flex justify-between rounded-lg bg-white mt-2 h-20 ">
            <div class="text-3xl text-black pt-5 w-4/5">
                <div class="grid justify-items-start px-16">
                    <span class="font-bold">Username</span>
                </div>
                
            </div>
            <div class="text-3xl text-black pt-5 w-4/5">
                <div class="grid justify-items-start">
                    <span class="font-medium"> <span class="font-bold pr-10">:</span>Danare</span>
                </div>
                
            </div>
        
        </div>
        <div class="flex justify-between rounded-lg bg-white mt-2 h-20 ">
            <div class="text-3xl text-black pt-5 w-4/5">
                <div class="grid justify-items-start px-16">
                    <span class="font-bold">Nama Lengkap</span>
                </div>
                
            </div>
            <div class="text-3xl text-black pt-5 w-4/5">
                <div class="grid justify-items-start">
                    <span class="font-medium"> <span class="font-bold pr-10">:</span>M Danar Kahfi</span>
                </div>
                
            </div>
        
        </div>
        <div class="flex justify-between rounded-lg bg-white mt-2 h-20 ">
            <div class="text-3xl text-black pt-5 w-4/5">
                <div class="grid justify-items-start px-16">
                    <span class="font-bold">Email</span>
                </div>
                
            </div>
            <div class="text-3xl text-black pt-5 w-4/5">
                <div class="grid justify-items-start">
                    <span class="font-medium"> <span class="font-bold pr-10">:</span>muhdankah22@gmail.com</span>
                </div>
                
            </div>
        
        </div>
        <div class="flex justify-between rounded-lg bg-white mt-2 h-20 ">
            <div class="text-3xl text-black pt-5 w-4/5">
                <div class="grid justify-items-start px-16">
                    <span class="font-bold">Telepon</span>
                </div>
                
            </div>
            <div class="text-3xl text-black pt-5 w-4/5">
                <div class="grid justify-items-start">
                    <span class="font-medium"> <span class="font-bold pr-10">:</span>087874588726</span>
                </div>
                
            </div>
        
        </div>
        
        
    </div>

    
</div>

@endsection





