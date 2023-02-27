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
                    <h3 class="text-2xl font-bold text-[#2D5EBB]">DATA MONITORING</h3>
                </div>
            </div>
            <!-- Table user -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left text-[#ffffff]">
                    <!-- head -->
                    <thead class="text-xs text-center uppercase bg-[#2D5EBB]">
                        <tr>
                            <th scope="col" class="px-7 py-4 ">
                                NO
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                TANGGAL
                            </th>
                            <th scope="col" class="px-7 py-4 ">
                                LAPORAN
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
                        @forelse ($monitoring as $item)
                        <tr class="bg-[#ffffff] text-[#000000]">
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $no++ }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                                {{ $item->tgl_monitoring }}
                            </td>
                            <td class="text-sm text-item font-semibold px-7 py-4 text-center">
                            <img src="{{ asset('storage/' . $item->laporan_monitoring) }}" id="gambar" alt="Foto" style="width:100px">
                            </td>
                            
                            <!-- icon Aksi -->
                            
                            <td class="text-sm font-medium leading-5 text-center [#ffffff]space-no-wrap ">
                                <div class="flex justify-center">
                                    <div class="px-4 py-4">
                                        <label for="delete{{$item->id_monitoring}}" class="text-[#FF0808] hover:text-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                        </label>
                                    </div>
                                    <div class="px-4 py-4">
                                        <label for="detail{{$item->id_monitoring}}" class="text-[#2D5EBB] hover:text-opacity-50">
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
                    </tbody>
                </table>
            </div>
            @empty
            <div class="my-4">
                <!-- The button to open modal -->
                <label for="tambah" class="btn bg-[#417EF2] hover:bg-[#2D5EBB] text-[#ffffff] font-bold py-2 px-4 border-b-4 border-[#2D5EBB] hover:border-[#417EF2] rounded text-lg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" /></svg></label>
            </div>
            @endforelse

            <!-- Modal Tambah Monitoring -->
           
            <input type="checkbox" id="tambah" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                    <label for="tambah" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                    <h3 class="text-lg font-bold text-[#ffffff] text-center">TAMBAH MONITORING</h3>
                    <form action="{{ route('pbsekolah.simpanmonitoring') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="flex justify-between mt-1">
                            <div class="form-control w-full max-w-2xl">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold">DATA PB SEKOLAH</span></label>
                                <select class="select select-bordered bg-white" name="pb_sekolah" required>
                                    <option value="default" disabled>Pilih</option>
                                    @foreach ($pbsekolah as $item)
                                    <option value="{{ $item->id_pbsekolah }}">{{ $item->nip_pbsekolah }} - {{ $item->nama_pbsekolah }}</option>
                                    @endforeach
                                </select>  
                            </div>
                        </div>
                        <div class="flex justify-between mt-1">
                            <div class="form-control w-full max-w-2xl">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold">DATA PRAKERIN</span></label>
                                <select class="select select-bordered bg-white" name="prakerin" required>
                                    <option value="default" disabled>Pilih</option>
                                    @foreach ($prakerin as $item)
                                    <option value="{{ $item->id_prakerin }}">{{ $item->nis }} - {{ $item->nama_siswa }} : ({{ $item->nama_iduka }})</option>
                                    @endforeach
                                </select>  
                            </div>
                        </div>

                        <div class="flex justify-between mt-1">
                            <div class="form-control w-full max-w-2xl">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold">TANGGAL</span></label>
                                <input type="date" name="tgl_monitoring" placeholder="Masukkan Tanggal" class="input input-bordered w-full max-w-2xl bg-[#ffffff]" required/>
                            </div>
                        </div>

                        <div class="flex justify-between mt-1">
                            <div class="form-control w-full max-w">
                                <label class="label"><span class="label-text text-[#ffffff] text-md font-bold">LAPORAN</span></label>
                                <img class="img-preview h-full w-full">
                                <input type="file" name="laporan_monitoring" placeholder="Upload File" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="foto_user" onchange="previewImage()" required/>
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

            <!-- Modal Detail Monitoring -->

            @foreach ($monitoring as $item)
            <input type="checkbox" id="detail{{$item->id_monitoring}}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-[#2D5EBB]">
                    <label for="detail{{$item->id_monitoring}}" class="btn btn-ghost btn-sm btn-circle text-[#ffffff] bg-[#2D5EBB] hover:bg-[#ffffff] hover:text-[#2D5EBB] absolute right-2 top-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></label>
                        <div class="flex justify-between mt-2 mb-5">
                            <div class="form-control w-full max-w-sm mr-2">
                                <img src="{{ asset('storage/' . $item->laporan_monitoring) }}">
                            </div>
                        </div>
                </div>
                </div>
            @endforeach

            <!-- Modal Hapus Monitoring -->

            @foreach($monitoring as $item)
            <input type="checkbox" id="delete{{ $item->id_monitoring }}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box w-11/12 max-w-2xl bg-white">
                    <svg fill="none" class="text-[#E63946] w-1/4 mx-auto" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"></path>
                    </svg>
                    <div class="text-center">
                    <h3 class="font-bold text-2xl">Anda yakin ingin menghapus ?</h3>
                    </div>
                    <div class="flex justify-center pt-4 gap-x-20 gap-y-3">
                        <label for="delete{{ $item->id_monitoring }}" class="btn btn-ghost btn-base bg-[#2D5EBB] w-36 text-white text-base hover:bg-[#2D5EBB] hover:bg-opacity-70">Batal</label>
                        <label class="btn btn-ghost btn-base bg-[#E63946] w-36 text-white text-base hover:bg-[#E63946] hover:bg-opacity-70">
                            <a href="/pbsekolah/hapusmonitoring/{{ $item->id_monitoring}}">
                                Hapus
                            </a>
                        </label>
                    </div>
                        
                </div>
            </div> 
            @endforeach
    
        </div>
    </div>


    <script>
    function previewImage() {
            const image = document.querySelector('#foto_user');
            const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
    </script>

@endsection
