@extends('layouts.main')
@section('container')

<form method="POST" action="simpan">
    @csrf
    <div class="pt-36">
        <div class="form-control border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Tambah Jurusan</span>
                </label>
                <label class="input-group">
                    <span class="pr-8">Bidang Keahlian</span>
                    <input type="text" name="bidang_keahlian" placeholder="Bidang Keahlian" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8">Program Keahlian</span>
                    <input type="text" name="program_keahlian" placeholder="Program Keahlian" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8">Nama Kaprog</span>
                    <select class="select select-bordered" name="kaprog">
                        <option value="default">Nama Kaprog</option>
                        @foreach ($kaprog as $item)
                            <option value="{{ $item->nip_kaprog }}">{{ $item->nama_kaprog }}</option>
                        @endforeach
                    </select>
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection