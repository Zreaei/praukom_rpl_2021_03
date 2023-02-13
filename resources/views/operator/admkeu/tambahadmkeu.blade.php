@extends('layouts.main')
@section('title', 'admkeu')
@section('container')

<form action=" {{ url('/operator/admkeu/tambah/tambahsimpan') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">FORM TAMBAH DATA</span>
                </label>
                <label class="input-group input-group-vertical">
                    <input type="hidden" name="datalevel" value="LVL007" class="input input-bordered"/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">USERNAME</span>
                    <input type="text" name="datausername" placeholder="Masukkan Username" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">PASSWORD</span>
                    <input type="text" name="datapassword" placeholder="Masukkan Password" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">EMAIL</span>
                    <input type="text" name="dataemail" placeholder="Masukkan Email" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">FOTO</span>
                    <input type="text" name="datafoto_user" placeholder="Masukkan Foto" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">NAMA LENGKAP</span>
                    <input type="text" name="datanama_admkeu" placeholder="Masukkan Nama Lengkap" class="input input-bordered" required/>
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" class="btn btn-success">TAMBAH ADM KEUANGAN</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection