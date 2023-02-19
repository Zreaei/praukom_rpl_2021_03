@extends('layouts.main')
@section('container')


<div class="">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('admkeu.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="flex justify-center">

        <div class="px-28 py-7 w-full justify-center items-center ">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA PENGAJUAN SISWA</h3>
                </div>
            </div>
            <!-- Table pengajuan -->

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-5 py-4 ">
                                No
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Siswa
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Tanggal Pengajuan
                            </th> 
                            <th scope="col" class="px-7 py-4 ">
                                IDUKA
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Konfirmasi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-5 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-5 py-4 text-center">
                                <label for="detail-siswa" type="button" class="text-[#ffffff] bg-[#0029FF] hover:bg-opacity-50 focus:outline-none focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5">Data Siswa</label>          
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                
                            </td>
                            <td class="text-sm text-item font-semibold px-5 py-4 text-center">
                                <label for="detail-IDUKA" type="button" class="text-[#ffffff] bg-[#FFA434] hover:bg-opacity-50 focus:outline-none focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5">Data IDUKA</label>          
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                <button type="button" class="text-[#ffffff] bg-[#09C4FF] hover:bg-opacity-50 focus:outline-none focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5">Lihat</button>          
                            </td>
                        </tr>
                   
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Detail Data Siswa -->
        <input type="checkbox" id="detail-siswa" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                <label for="detail-siswa" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                <h3 class="text-lg font-bold text-[#ffffff] text-center">DATA SISWA</h3>

                </form>    
            </div>
        </div> 

        <!-- Modal Detail Data IDUKA -->
        <input type="checkbox" id="detail-IDUKA" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                <label for="detail-IDUKA" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                <h3 class="text-lg font-bold text-[#ffffff] text-center">DATA IDUKA</h3>

                </form>    
            </div>
        </div> 
    </div>
</div>
@endsection
