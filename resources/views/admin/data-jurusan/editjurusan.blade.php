@extends('layouts.main')
@section('container')

<form method="POST" action="simpanedit">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Edit Jurusan</span>
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Bidang Keahlian</span>
                    <input type="text" name="bidang_keahlian" placeholder="Bidang Keahlian" value="{{ $edit->bidang_keahlian }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Program Keahlian</span>
                    <input type="text" name="program_keahlian" placeholder="Program Keahlian" value="{{ $edit->program_keahlian }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Nama Kaprog</span>
                    <select class="select select-bordered" name="kaprog">
                        <option value="default">Nama Kaprog</option>
                        @foreach ($kaprog as $item)
                            <option value="{{ $item->nip_kaprog }}">{{ $item->nama_kaprog }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="id_jurusan" value="{{ $edit->id_jurusan }}" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Simpan</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection