@extends('layouts.main')
@section('container')

<form method="POST" action="simpanedit">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Edit Kelas</span>
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Nama Kelas</span>
                    <input type="text" name="nama_kelas" placeholder="Nama Kelas" value="{{ $edit->nama_kelas }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Tingkatan</span>
                    <input type="text" name="tingkatan" placeholder="Tingkatan" value="{{ $edit->tingkatan }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Jurusan</span>
                    <select class="select select-bordered" name="jurusan">
                        <option value="default">Pilih Jurusan</option>
                        @foreach ($jurusan as $item)
                            <option value="{{ $item->id_jurusan }}">{{ $item->program_keahlian }}</option>
                        @endforeach
                    </select>
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">angkatan</span>
                    <select class="select select-bordered" name="angkatan">
                        <option value="default">Pilih Angkatan</option>
                        @foreach ($angkatan as $item)
                            <option value="{{ $item->id_angkatan }}">{{ $item->tahun_angkatan }}</option>
                        @endforeach
                    </select>
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Walas</span>
                    <select class="select select-bordered" name="walas">
                        <option value="default">Pilih Walas</option>
                        @foreach ($walas as $item)
                            <option value="{{ $item->nip_walas }}">{{ $item->nama_walas }}</option>
                        @endforeach
                    </select>
                </label>
                <input type="hidden" name="id_user" value="{{ $edit->id_user }}" />
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Simpan</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection