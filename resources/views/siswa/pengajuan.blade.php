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
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA PENGAJUAN</h3>
                </div>
                <div>
                    <!-- The button to open modal --> 
                    <label for="tambah-pengajuan" class="btn bg-[#417EF2] hover:bg-[#2D5EBB] text-[#ffffff] font-bold py-2 px-4 border-b-4 border-[#2D5EBB] hover:border-[#417EF2] rounded text-lg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" /></svg></label>
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
                                NIS
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Tanggal Pengajuan
                            </th> 
                            <th scope="col" class="px-7 py-4 ">
                                Nama Perusahaan
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Pimpinan Perusahaan
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Alamat Perusahaan
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Telp Perusahaan
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                Konfirmasi
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
                        @foreach ($pengajuan as $ajuan)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-5 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $ajuan->nis }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $ajuan->tgl_pengajuan }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $ajuan->nama_iduka }}
                            </td>
                           <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $ajuan->pimpinan_iduka }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $ajuan->alamat_iduka }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $ajuan->telp_iduka }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                <button type="button" class="text-[#ffffff] bg-[#09C4FF] hover:bg-opacity-50 focus:outline-none focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5">Lihat</button>          
                            </td>
                            <!-- icon Aksi -->
                            
                            <td class="text-sm font-medium leading-5 text-center [#ffffff]space-no-wrap ">
                                <div class="flex justify-center">
                                    <div class="px-4 py-4">
                                        <label for="edit-pengajuan{{$ajuan->id_pengajuan}}" class="text-[#2D5EBB] hover:text-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                        </label>
                                    </div>
                                                <!-- <div class="px-4 py-4">
                                                    <a href="#" class="text-gray-600 hover:text-gray-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    </a>
                                                </div> -->
                                    <div class="px-4 py-4">
                                        <label for="delete{{ $ajuan->id_iduka }}" class="text-[#FF0808] hover:text-opacity-50">
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

            <!-- Modal Tambah Pengajuan -->
           
            <input type="checkbox" id="tambah-pengajuan" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                    <label for="tambah-pengajuan" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                    <h3 class="text-lg font-bold text-[#ffffff] text-center">TAMBAH DATA PENGAJUAN</h3>
                    <form action="{{ route('siswa.simpanpengajuan') }}" method="POST">
                    @csrf
                        <div class="flex justify-between mt-1">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold uppercase ">NIS</span></label>
                                <select class="select select-bordered bg-[#ffffff]" name="datasiswa" required>
                                    <option disabled selected>Pilih NIS</option>
                                    @foreach ($siswa as $item)
                                        <option value="{{ $item->nis }}">{{ $item->nis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold uppercase ">Tanggal Pengajuan</span></label>
                                <input type="date" name="datatglpengajuan" placeholder="Type here" class="input input-bordered w-full max-w-sm bg-[#ffffff]" required/>
                            </div>
                        </div>

                        <div class="flex justify-between mt-1">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold uppercase ">Nama Perusahaan</span></label>
                                <input type="text" name="datanamaiduka" placeholder="Nama Perusahaan" class="input input-bordered w-full max-w-sm bg-[#ffffff]" required />
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold uppercase ">Pimpinan Perusahaan</span></label>
                                <input type="text" name="datapimpinaniduka" placeholder="Pimpinan Perusahaan" class="input input-bordered w-full max-w-sm bg-[#ffffff]" required/>
                            </div>
                        </div>

                        <div class="flex justify-between mt-1">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold uppercase ">Alamat Perusahaan</span></label>
                                <input type="text" name="dataalamatiduka" placeholder="Alamat Perusahaan" class="input input-bordered w-full max-w-sm bg-[#ffffff]"required />
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold uppercase ">Telp Perusahaan</span></label>
                                <input type="number" name="datatelpiduka" placeholder="Telp Perusahaan" class="input input-bordered w-full max-w-sm bg-[#ffffff]" required/>
                            </div>
                        </div>


                        <div class="flex justify-between mt-1">
                            <div class="form-control w-full max-w-2xl">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold uppercase ">Wali Kelas</span></label>
                                <select class="select select-bordered bg-[#ffffff]" name="datawalas" required>
                                    <option disabled selected>Pilih Nama Wali Kelas</option>
                                    @foreach ($walas as $item)
                                        <option value="{{ $item->id_walas }}">{{ $item->nama_walas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @foreach ($admkeu as $item)
                                <input type="hidden"  name="dataadmkeu" value="{{ $item->id_admkeu }}"required />
                            @endforeach
                                <!-- <label class="label"><span class="label-text text-[#ffffff] text-md font-bold">Nama Admin Keuangan</span></label>
                                <select class="select select-bordered bg-[#ffffff]" name="dataadmkeu">
                                    <option disabled selected>Pilih Nama Admin Keuangan</option>
                                    @foreach ($admkeu as $item)
                                        <option value="{{ $item->id_admkeu }}"></option>
                                    @endforeach
                                </select> -->
                            
                        </div>

                        <div class="flex justify-between mt-1">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold uppercase ">Kepala Program</span></label>
                                <select class="select select-bordered bg-[#ffffff]" name="datakaprog" required>
                                    <option disabled selected>Pilih Nama Kepala Program</option>
                                    @foreach ($kaprog as $item)
                                        <option value="{{ $item->id_kaprog }}">{{ $item->nama_kaprog }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-control w-full max-w-sm ">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold uppercase ">Waka Hubin</span></label>
                                <select class="select select-bordered bg-[#ffffff]" name="datawkhubin" required>
                                    <option disabled selected>Pilih Nama Waka Hubin</option>
                                    @foreach ($wkhubin as $item)
                                        <option value="{{ $item->id_wkhubin }}">{{ $item->nama_wkhubin }}</option>
                                    @endforeach
                                </select>
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



           
            <!-- Modal Edit Pengajuan -->
            @foreach ($pengajuan as $edit)
            <input type="checkbox" id="edit-pengajuan{{$edit->id_pengajuan}}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                    <label for="edit-pengajuan{{$edit->id_pengajuan}}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                    <h3 class="text-lg font-bold text-[#ffffff] text-center">EDIT DATA PENGAJUAN</h3>
                
                    <form action="{{ route('siswa.editsimpanpengajuan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    
                        <div class=" mt-2">
                            <div class="form-control w-full max-w-full">
                                <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">Tanggal Pengajuan</span></label>
                                <input type="date" name="tgl_pengajuan" value="{{ old('tgl_pengajuan', $edit->tgl_pengajuan) }}"required placeholder="Type here" class="input input-bordered w-full max-w-full bg-[#ffffff]" />
                                <input type="hidden"  name="id_pengajuan" value="{{$edit->id_pengajuan}}" required/>
                                <input type="hidden"  name="id_iduka" value="{{$edit->id_iduka }}" required/>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">Nama Perusahaan</span></label>
                                <input type="text" name="nama_iduka" value="{{ old('nama_iduka', $edit->nama_iduka ) }}"required placeholder="Nama Perusahaan" class="input input-bordered w-full max-w-sm bg-[#ffffff]" />
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">Pimpinan Perusahaan</span></label>
                                <input type="text" name="pimpinan_iduka" value="{{ old('pimpinan_iduka', $edit->pimpinan_iduka  ) }}"required placeholder="Pimpinan Perusahaan" class="input input-bordered w-full max-w-sm bg-[#ffffff]" />
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">Alamat Perusahaan</span></label>
                                <input type="text" name="alamat_iduka" value="{{ old('alamat_iduka', $edit->alamat_iduka) }}"required  placeholder="Alamat Perusahaan" class="input input-bordered w-full max-w-sm bg-[#ffffff]" />
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-sm font-bold uppercase ">Telp Perusahaan</span></label>
                                <input type="number" name="telp_iduka" value="{{ old('telp_iduka', $edit->telp_iduka) }}"required placeholder="Telp Perusahaan" class="input input-bordered w-full max-w-sm bg-[#ffffff]" />
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

            <!-- Modal Hapus Pengajuan -->
            @foreach($pengajuan as $hapus)
            <input type="checkbox" id="delete{{ $hapus->id_iduka }}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-white">
                    <svg fill="none" class="text-[#E63946] w-1/4 mx-auto" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"></path>
                    </svg>
                    <div class="text-center">
                    <h3 class="font-bold text-2xl">Anda yakin ingin menghapus ?</h3>
                    </div>
                    <div class="flex justify-center pt-4 gap-x-20 gap-y-3">
                        <label for="delete{{ $hapus->id_iduka }}" class="btn btn-ghost btn-base bg-[#2D5EBB] w-36 text-white text-base hover:bg-[#2D5EBB] hover:bg-opacity-70">Cancel</label>
                            <a href="/siswa/hapuspengajuan/{{$hapus->id_iduka}}">
                                <label class="btn btn-ghost btn-base bg-[#E63946] w-36 text-white text-base hover:bg-[#E63946] hover:bg-opacity-70">
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
