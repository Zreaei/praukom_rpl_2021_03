@extends('layouts.main')
@section('container')
<div class="flex bg-gray-100">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('siswa.kegiatan') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
        </a>
    </div>
    <div class="py-5 px-80 justify-center items-center w-full">
        <div class="grid justify-items-center bg-[#2D5EBB] rounded-lg mb-4">
            <div class="text-2xl font-bold mt-3 text-white">
                <h1>EDIT DATA KEGIATAN</h1>
            </div>
            <div class="text-black">
                <form action="/siswa/editsimpankegiatan" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class=" mt-2">
                    <div class="form-control w-full max-w-full">
                        <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold uppercase ">Tanggal Kegiatan</span></label>
                        <input type="date" name="tgl_kegiatan" value="{{ $edit[0]->tgl_kegiatan }}" placeholder="Type here" class="input input-bordered w-full max-w-full bg-[#ffffff]" />
                        <input type="hidden"  name="id_kegiatan" value="{{$edit[0]->id_kegiatan}}" />
                    </div>
                </div>

                <div class="flex justify-start mt-1">
                    <div class="form-control w-36 max-w-lg">
                        <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold uppercase ">Jam Masuk</span></label>
                        <input type="time" name="jam_masuk" value="{{ $edit[0]->jam_masuk }}" placeholder="Type here" class="input input-bordered w-36 max-w-lg bg-[#ffffff]" />
                    </div>
                    <div class="form-control w-36 max-w-lg ml-2">
                        <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold uppercase ">Jam Keluar</span></label>
                        <input type="time" name="jam_keluar" value="{{ $edit[0]->jam_keluar }}" placeholder="Type here" class="input input-bordered w-36 max-w-lg bg-[#ffffff]" />
                    </div>
                    <div class="form-control w-full max-w-sm ml-2">
                        <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold uppercase ">Keterangan</span></label>
                        <input type="text" name="keterangan_kegiatan" value="{{ $edit[0]->keterangan_kegiatan }}" placeholder="Type here" class="input input-bordered w-full max-w-full bg-[#ffffff]" />
                    </div>
                </div>

                <div class="flex justify-between mt-2">
                    <div class="form-control w-full max-w-2xl">
                        <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold uppercase ">foto kegiatan</span></label>
                        <input type="hidden" name="fotoLama" value="{{ $edit[0]->foto_kegiatan }}" />
                        <img src="{{ asset('storage/' . $edit[0]->foto_kegiatan) }}" class="img-preview h-full w-full">
                        <input type="file" name="foto_kegiatan" value="{{ $edit[0]->foto_kegiatan }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="foto_kegiatan" onchange="previewImage()" required/>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn bg-gradient-to-b from-[#FFA434] to-[#D24E16] w-full my-3 ">
                        SUBMIT 
                    </button>
                </div>
                </form>    
            </div>
        </div>
    </div>
</div>
<script>
    function previewImage() {
        const image = document.querySelector('#foto_kegiatan');
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


