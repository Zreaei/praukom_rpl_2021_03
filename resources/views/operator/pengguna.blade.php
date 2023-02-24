@extends('layouts.main')
@section('container')


<div class="">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('operator.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="flex justify-center">

        <div class="px-28 py-7 w-full justify-center items-center ">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA PENGGUNA</h3>
                </div>
            </div>
            <div class="">
            <form action="/operator/pengguna" method="get">
                @csrf
                <div class="form-control mb-2">
                    <div class="input-group ">
                    <input type="text" name="search" placeholder="Cari... (username/level)" class="input input-bordered" value="{{ request("search") }}" autocomplete="off"/>
                    <button class="btn btn-square" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </button>
                    </div>
                </div>
            </form>
            </div>

            <!-- Table pengguna -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-7 py-4 ">
                                NO
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                USERNAME
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                EMAIL
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                LEVEL
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengguna as $key => $item)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $pengguna->firstItem() + $key }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->username }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->email }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->nama_level }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="lg:flex flex-row-reverse items-center">
                    <div>
                        {{ $pengguna->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
