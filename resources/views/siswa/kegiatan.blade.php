@extends('layouts.main')
@section('container')


<div class="">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('siswa.home') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
            
        </a>
    </div>
    <div class="flex justify-center">

        <div class="px-28 py-7 w-full justify-center items-center ">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA KEGIATAN</h3>
                </div>
                <div>
                    <!-- The button to open modal -->
                    <label for="tambah-kegiatan" class="btn bg-[#417EF2] hover:bg-[#2D5EBB] text-[#ffffff] font-bold py-2 px-4 border-b-4 border-[#2D5EBB] hover:border-[#417EF2] rounded text-lg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" /></svg></label>
                </div>
            </div>
            <!-- Table kegiatan -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-7 py-4 ">
                                No
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Foto
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Keterangan
                            </th> 
                            <th scope="col" class="px-7 py-4 ">
                                tgl_kegiatan
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                jam_masuk
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                jam_keluar
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                        @foreach ($kegiatan as $item)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                <img src="{{ asset('storage' . $item->foto_kegiatan) }}" id="foto_kegiatan" alt="Foto Presensi" style="width:100px">
                            </td> 
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->keterangan_kegiatan }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->tgl_kegiatan}}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->jam_masuk}}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->jam_keluar}}
                            </td>
                            
                            <!-- icon Aksi -->
                            <td class="text-sm font-medium leading-5 text-center [#ffffff]space-no-wrap ">
                                <div class="flex justify-center">
                                    <div class="px-4 py-4">
                                        <label for="edit-kegiatan{{$item->id_kegiatan}}" class="text-[#2D5EBB] hover:text-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                        </label>
                                    </div>
                                    <div class="px-4 py-4">
                                        <label for="delete{{ $item->id_kegiatan }}" class="text-[#FF0808] hover:text-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Modal Tambah Kegiatan -->
            <input type="checkbox" id="tambah-kegiatan" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                    <label for="tambah-kegiatan" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                    <h3 class="text-lg font-bold text-[#ffffff] text-center">TAMBAH DATA KEGIATAN</h3>
                    <form action="{{ route('siswa.simpankegiatan') }}" method="POST">
                    @csrf
                        <div class="flex justify-between mt-1">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Prakerin</span></label>
                                <select class="select select-bordered bg-[#ffffff]" name="prakerin">
                                    <option disabled selected>Pilih Prakerin</option>
                                    @foreach ($prakerin as $item)
                                        <option value="{{ $item->id_prakerin }}">{{ $item->id_prakerin }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Tanggal Kegiatan</span></label>
                                <input type="date" name="tgl_kegiatan" placeholder="Type here" class="input input-bordered w-full max-w-full bg-[#ffffff]" />
                            </div>
                        </div>
                        
                        <div class="flex justify-start mt-1">
                            <div class="form-control w-36 max-w-lg mr-1">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Jam Masuk</span></label>
                                <input type="time" name="jam_masuk" placeholder="Type here" class="input input-bordered w-36 max-w-lg bg-[#ffffff]" />
                            </div>
                            <div class="form-control w-36 max-w-lg ml-4">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Jam Keluar</span></label>
                                <input type="time" name="jam_keluar" placeholder="Type here" class="input input-bordered w-36 max-w-lg bg-[#ffffff]" />
                            </div>
                            <div class="form-control w-full max-w-sm ml-3">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Keterangan Kegiatan</span></label>
                                <input type="text" name="keterangan_kegiatan" placeholder="kegiatan" class="input input-bordered w-full max-w-sm bg-[#ffffff]" />
                            </div>
                        </div>

                        <div>
                            <div class="form-control w-full max-w-full">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Foto Kegiatan</span></label>
                                <input type="file" name="foto_kegiatan" placeholder="masukan foto" class="input input-bordered w-full max-w-2xl bg-[#ffffff] px-4 py-2" />
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn bg-gradient-to-b from-[#FFA434] to-[#D24E16] w-full mt-3 ">
                                SUBMIT
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <!-- Modal Edit Kegiatan -->
            @foreach ($kegiatan as $edit)
            <input type="checkbox" id="edit-kegiatan{{$edit->id_kegiatan}}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                    <label for="edit-kegiatan{{$edit->id_kegiatan}}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                    <h3 class="text-lg font-bold text-[#ffffff] text-center">EDIT DATA KEGIATAN</h3>
                
                    <form action="{{ route('siswa.editsimpankegiatan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    
                    
                        <div class=" mt-2">
                            <div class="form-control w-full max-w-full">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Tanggal Kegiatan</span></label>
                                <input type="date" name="tgl_kegiatan" value="{{ old('tgl_kegiatan', $edit->tgl_kegiatan) }}" placeholder="Type here" class="input input-bordered w-full max-w-full bg-[#ffffff]" />
                                <input type="hidden"  name="id_kegiatan" value="{{$edit->id_kegiatan}}" />
                            </div>
                        </div>

                        <div class="flex justify-start mt-1">
                            <div class="form-control w-36 max-w-lg">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Jam Masuk</span></label>
                                <input type="time" name="jam_masuk" value="{{ old('jam_masuk', $edit->jam_masuk) }}" placeholder="Type here" class="input input-bordered w-36 max-w-lg bg-[#ffffff]" />
                            </div>
                            <div class="form-control w-36 max-w-lg ml-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Jam Keluar</span></label>
                                <input type="time" name="jam_keluar" value="{{ old('jam_keluar', $edit->jam_keluar) }}" placeholder="Type here" class="input input-bordered w-36 max-w-lg bg-[#ffffff]" />
                            </div>
                            <div class="form-control w-full max-w-sm ml-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Keterangan</span></label>
                                <input type="text" name="keterangan_kegiatan" value="{{ old('keterangan_kegiatan', $edit->keterangan_kegiatan) }}" placeholder="Type here" class="input input-bordered w-full max-w-full bg-[#ffffff]" />
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-2xl">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">Foto Kegiatan</span></label>
                                <input type="file" name="foto_kegiatan" src="{{ asset('img') . $edit->foto_kegiatan }}" placeholder="masukan foto" class="input input-bordered w-full max-w-2xl bg-[#ffffff] px-4 py-2" />
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn bg-gradient-to-b from-[#FFA434] to-[#D24E16] w-full mt-3 ">
                                SUBMIT 
                            </button>
                        </div>
                    </form>    
                </div>
            </div> 
            @endforeach

            <!-- Modal Hapus Kegiatan -->
            @foreach($kegiatan as $hapus)
            <input type="checkbox" id="delete{{ $hapus->id_kegiatan }}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-white">
                    <svg fill="none" class="text-[#E63946] w-1/4 mx-auto" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"></path>
                    </svg>
                    <div class="text-center">
                    <h3 class="font-bold text-2xl">Anda yakin ingin menghapus ?</h3>
                    </div>
                    <div class="flex justify-center pt-4 gap-x-20 gap-y-3">
                        <label for="delete{{ $hapus->id_kegiatan }}" class="btn btn-ghost btn-base bg-[#2D5EBB] w-36 text-white text-base hover:bg-[#2D5EBB] hover:bg-opacity-70">Cancel</label>
                        <label class="btn btn-ghost btn-base bg-[#E63946] w-36 text-white text-base hover:bg-[#E63946] hover:bg-opacity-70">
                            <a href="/siswa/hapuskegiatan/{{$hapus->id_kegiatan}}">
                                Delete
                            </a>
                        </label>
                    </div>
                        
                </div>
            </div> 
            @endforeach
        </div>
    </div>
  
@endsection