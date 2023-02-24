@extends('layouts.main')
@section('container')
<div class="fixed w-20 mt-5 overflow-y-auto bg-gray-50 rounded-r-lg bg-gradient-to-b from-[#2D5EBB] to-[#417EF2]">
    <a href="{{ route('operator.pbiduka') }}" class="flex p-2 text-xl font-bold text-[#ffffff] rounded-r-lg hover:bg-[#ffffff] hover:bg-opacity-30  active:bg-opacity-30 focus:bg-[#ffffff] focus:bg-opacity-30">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" /></svg>
    </a>
</div>
<div class="grid place-items-center h-screen">
                <div class="py-20 px-20 w-11/12 max-w-2xl bg-[#2D5EBB]">
                    <h3 class="text-lg font-bold text-[#ffffff] text-center">EDIT DATA PEMBIMBING IDUKA</h3>
                
                    <form action="/operator/editsimpanpbiduka" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                        <input type="hidden"  name="nik" value="{{ $edit[0]->nik }}" />
                        <input type="hidden"  name="user" value="{{ $edit[0]->user }}" />

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-2xl">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">NAMA LENGKAP</span></label>
                                <input type="text" name="nama_pbiduka" value="{{ $edit[0]->nama_pbiduka }}" class="input input-bordered w-full max-w-2xl bg-[#ffffff]" required/>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">USERNAME</span></label>
                                <input type="text" name="username" value="{{ $edit[0]->username }}" class="input input-bordered w-full max-w-sm bg-[#ffffff]" required/>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">PASSWORD</span></label>
                                <input type="password" name="password" value="{{ $edit[0]->password }}" class="input input-bordered w-full max-w-sm bg-[#ffffff]" required/>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w-sm mr-2">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">EMAIL</span></label>
                                <input type="email" name="email" value="{{ $edit[0]->email }}" class="input input-bordered w-full max-w-sm bg-[#ffffff]" required/>
                            </div>
                            <div class="form-control w-full max-w-sm">
                                <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">NOMOR TELEPON</span></label>
                                <input type="number" name="telp_pbiduka" value="{{ $edit[0]->telp_pbiduka }}" class="input input-bordered w-full max-w-sm bg-[#ffffff]" required/>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="form-control w-full max-w">
                            <label class="label"><span class="label-text text-[#ffffff] text-lg font-bold">FOTO</span></label>
                                <input type="hidden" name="fotoLama" value="{{ $edit[0]->foto_user }}" />
                                <img src="{{ asset('storage/' . $edit[0]->foto_user) }}" class="img-preview h-full w-full">
                                <input type="file" name="foto_user" value="{{ $edit[0]->foto_user }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="foto_user" onchange="previewImage()" required/>
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