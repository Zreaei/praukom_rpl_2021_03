@extends('layouts.main')
@section('container')

<form method="POST" action="simpanedit">
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Edit Operator</span>
                </label>
                <label class="input-group">
                    <span class="pr-8">Nama</span>
                    <input type="text" name="nama_operator" placeholder="nama operator" value="{{ $nama_operator }}" class="input input-bordered" />
                    <input type="hidden" name="id_operator" value="{{ $id_operator }}" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Simpan</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection