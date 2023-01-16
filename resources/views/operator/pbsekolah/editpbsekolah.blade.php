@extends('layouts.main')
@section('title', 'pbsekolah')
@section('container')

<form action="{{ url("/operator/pbsekolah/edit/editsimpan") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">FORM EDIT DATA</span>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">NAMA LENGKAP</span>
                    <input type="text" name="nama_pbsekolah" value="{{ $nama_pbsekolah }}" class="input input-bordered" required/>
                    <input type="hidden" name="nip_pbsekolah" value="{{ $nip_pbsekolah }}" />
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">NO TELP</span>
                    <input type="text" name="telp_pbsekolah" value="{{ $telp_pbsekolah }}" class="input input-bordered" required/>
                    <input type="hidden" name="nip_pbsekolah" value="{{ $nip_pbsekolah }}" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" class="btn btn-success">SIMPAN</button>
                </div>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="reset" class="btn btn-error">RESET</button>
                </div>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <a href="/operator/pbsekolah"><button type="button" class="btn btn-warning">KEMBALI</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection