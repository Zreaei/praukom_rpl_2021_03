@extends('layouts.main')
@section('container')

<form method="POST" action="simpanedit">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Edit Angkatan</span>
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Tahun Angkatan</span>
                    <input type="text" name="tahun_angkatan" placeholder="Tahun Angkatan" value="{{ $edit->tahun_angkatan }}" class="input input-bordered" />
                </label>
                <label class="input-group hidden">
                    <span class="pr-8 bg-white">id_angkatan</span>
                    <input type="text" name="id_angkatan" placeholder="id_angkatan" value="{{ $edit->id_angkatan }}" class="input input-bordered" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Simpan</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection