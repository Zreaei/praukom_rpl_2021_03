@extends('layouts.main')
@section('container')

<form method="POST" action="simpan">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Tambah Kelas</span>
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Nama Kelas</span>
                    <input type="text" name="nama_kelas" placeholder="Nama Kelas" class="input input-bordered" required />
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Tingkatan</span>
                    <input type="text" name="tingkatan" placeholder="Tingkatan" class="input input-bordered" required />
                </label>
                <div class="form-control">
                    <label class="input-group">
                        <span class="pr-8 bg-white">Jurusan</span>
                        <select class="select select-bordered" name="jurusan">
                            <option value="default">Pilih Jurusan</option>
                            @foreach ($jurusan as $item)
                                <option value="{{ $item->id_jurusan }}">{{ $item->bidang_keahlian }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="form-control">
                    <label class="input-group">
                        <span class="pr-8 bg-white">Angkatan</span>
                        <select class="select select-bordered" name="angkatan">
                            <option value="default">Pilih Angkatan</option>
                            @foreach ($angkatan as $item)
                                <option value="{{ $item->id_angkatan }}">{{ $item->tahun_angkatan }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="form-control">
                    <label class="input-group">
                        <span class="pr-8 bg-white">Walas</span>
                        <select class="select select-bordered" name="walas">
                            <option value="default">Pilih Walas</option>
                            @foreach ($walas as $item)
                                <option value="{{ $item->nip_walas }}">{{ $item->nama_walas }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection