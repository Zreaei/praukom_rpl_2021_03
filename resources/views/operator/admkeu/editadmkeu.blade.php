@extends('layouts.main')
@section('title', 'admkeu')
@section('container')
<form action="/operator/admkeu/edit/editsimpan" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">FORM EDIT DATA</span>
                </label>
                <input type="hidden" name="id_admkeu" value="{{ $edit[0]->id_admkeu }}" />
                <input type="hidden" name="user" value="{{ $edit[0]->user }}" />
                <label class="input-group input-group-vertical">
                    <span class="pr-8">USERNAME</span>
                    <input type="text" name="username" value="{{ $edit[0]->username }}" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">PASSWORD</span>
                    <input type="password" name="password" value="{{ $edit[0]->password }}" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">EMAIL</span>
                    <input type="text" name="email" value="{{ $edit[0]->email }}" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">FOTO</span>
                    <input type="hidden" name="fotoLama" value="{{ $edit[0]->foto_user }}" />
                    <img src="{{ asset('storage/' . $edit[0]->foto_user) }}" class="img-preview object-scale-down">
                    <input type="file" name="foto_user" value="{{ $edit[0]->foto_user }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="foto_user" onchange="previewImage()" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">NAMA LENGKAP</span>
                    <input type="text" name="nama_admkeu" value="{{ $edit[0]->nama_admkeu }}" class="input input-bordered" required/>
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" class="btn btn-success">SIMPAN</button>
                </div>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="reset" class="btn btn-error">RESET</button>
                </div>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <a href="/operator/admkeu"><button type="button" class="btn btn-warning">KEMBALI</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

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