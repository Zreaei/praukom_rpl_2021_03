@extends('layouts.main')
<<<<<<< HEAD
@section('title', 'admkeu')
@section('container')

<form action="{{ url("/operator/admkeu/edit/editsimpan") }}" method="POST" enctype="multipart/form-data">
    @csrf
=======
@section('container')

<form method="POST" action="simpanedit">
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
<<<<<<< HEAD
                    <span class="label-text mx-auto">FORM EDIT DATA</span>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">NAMA LENGKAP</span>
                    <input type="text" name="nama_admkeu" value="{{ $nama_admkeu }}" class="input input-bordered" required/>
                    <input type="hidden" name="id_admkeu" value="{{ $id_admkeu }}" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" class="btn btn-success">SIMPAN</button>
                </div>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="reset" class="btn btn-error">RESET</button>
                </div>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <a href="/operator/admkeu"><button type="button" class="btn btn-warning">KEMBALI</button></a>
=======
                    <span class="label-text mx-auto">Edit admkeu</span>
                </label>
                <label class="input-group">
                    <span class="pr-8">Nama</span>
                    <input type="text" name="nama_admkeu" placeholder="nama admkeu" value="{{ $nama_admkeu }}" class="input input-bordered" />
                    <input type="hidden" name="id_admkeu" value="{{ $id_admkeu }}" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Simpan</button></a>
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
                </div>
            </div>
        </div>
    </div>
</form>

@endsection