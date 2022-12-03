@extends('layouts.main')
@section('container')

<form method="POST" action="simpanedit">
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Edit admkeu</span>
                </label>
                <label class="input-group">
                    <span class="pr-8">Nama</span>
                    <input type="text" name="nama_admkeu" placeholder="nama admkeu" value="{{ $nama_admkeu }}" class="input input-bordered" />
                    <input type="hidden" name="id_admkeu" value="{{ $id_admkeu }}" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Simpan</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection