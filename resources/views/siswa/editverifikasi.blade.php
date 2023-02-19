@extends('layouts.main')
@section('container')
<div class="flex bg-gray-100">
    <div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
        <a href="{{ route('siswa.verifikasi') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
        </a>
    </div>
    <div class="py-5 px-80 justify-center items-center w-full">
        <div class="grid justify-items-center bg-[#2D5EBB] rounded-lg mb-4">
            <div class="text-2xl font-bold mt-3 text-white">
                <h1>EDIT DATA VERIFIKASI</h1>
            </div>
            <div class="text-black">
                <form action="/siswa/editsimpanverifikasi" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class=" mt-2">
                    <div class="form-control w-full max-w-full">
                        <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold uppercase ">Tanggal Verifikasi</span></label>
                        <input type="date" name="tgl_verifikasi" value="{{ $edit[0]->tgl_verifikasi }}" placeholder="Type here" class="input input-bordered w-full max-w-full bg-[#ffffff]" />
                        <input type="hidden"  name="id_verifikasi" value="{{$edit[0]->id_verifikasi}}" />
                    </div>
                </div>

                <div class="flex justify-between mt-2">
                    <div class="form-control w-full max-w-2xl">
                        <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold uppercase ">bukti Verifikasi</span></label>
                        <input type="hidden" name="fotoLama" value="{{ $edit[0]->bukti_verifikasi }}" />
                        <img src="{{ asset('storage/' . $edit[0]->bukti_verifikasi) }}" class="img-preview h-full w-full">
                        <input type="file" name="bukti_verifikasi" value="{{ $edit[0]->bukti_verifikasi }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="foto_kegiatan" onchange="previewImage()" required/>
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
        const image = document.querySelector('#bukti_verifikasi');
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


