@extends('layouts.main')
@section('container')


<div class="">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('pbsekolah.prakerin') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="flex justify-center">

        <div class="px-28 py-7 w-full justify-center items-center ">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA KEGIATAN</h3>
                </div>
            </div>
            <!-- Table Kegiatan -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-7 py-4 ">
                                NO
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                FOTO
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                KETERANGAN
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                TANGGAL
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                JAM MASUK
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                JAM KELUAR
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                AKSI
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                        @foreach ($prakerin as $item)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                            <img src="{{ asset('storage/' . $item->foto_kegiatan) }}" id="gambar" alt="Foto" style="width:100px">
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->keterangan_kegiatan }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->tgl_kegiatan }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->jam_masuk }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->jam_keluar }}
                            </td>
                            <td class="text-sm font-medium leading-5 text-center [#ffffff]space-no-wrap ">
                                <div class="flex justify-center">
                                    <div class="px-4 py-4">
                                    <div class="px-4 py-4">
                                        <label for="detail{{$item->id_kegiatan}}" class="text-[#2D5EBB] hover:text-opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal Detail Kegiatan -->

            @foreach ($prakerin as $detail)
            <input type="checkbox" id="detail{{$detail->id_kegiatan}}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                    <label for="detail{{$detail->id_kegiatan}}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                        <div class="flex justify-between mt-2 mb-5">
                            <div class="form-control w-full max-w-sm mr-2">
                                <img src="{{ asset('storage/' . $detail->foto_kegiatan) }}">
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">KETERANGAN</span></label>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">: {{$detail->keterangan_kegiatan}}</span></label>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">TANGGAL</span></label>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">: {{$detail->tgl_kegiatan}}</span></label>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">JAM MASUK</span></label>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">: {{$detail->jam_masuk}}</span></label>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">JAM KELUAR</span></label>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">: {{$detail->jam_keluar}}</span></label>
                            </div>
                        </div>

                    </form>    
                </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
