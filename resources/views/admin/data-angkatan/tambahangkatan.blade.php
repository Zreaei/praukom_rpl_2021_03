@extends('layouts.main')
@section('container')

<form method="POST" action="simpan">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Tambah Angkatan</span>
                </label>
                <label class="input-group">
                    <span class="pr-8">Tahun Angkatan</span>
                    <input type="text" name="tahun_angkatan" placeholder="Tahun Angkatan" class="input input-bordered" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection