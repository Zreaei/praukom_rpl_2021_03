@extends('layouts.main')
@section('container')

<form method="POST" action="simpanedit">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Tambah Siswa</span>
                </label>
                <label class="input-group">
                    <span class="pr-8">User</span>
                    <select class="select select-bordered" name="user">
                        <option value="default">Pilih User</option>
                        @foreach ($user as $item)
                            <option value="{{ $item->id_user }}">{{ $item->username }}</option>
                        @endforeach
                    </select>
                </label>
                <label class="input-group">
                    <span class="pr-8">Kelas</span>
                    <select class="select select-bordered" name="kelas">
                        <option value="default">Pilih Kelas</option>
                        @foreach ($kelas as $item)
                            <option value="{{ $item->id_kelas }}">{{ $item->nama_kelas }}</option>
                        @endforeach
                    </select>  
                </label>
                <label class="input-group">
                    <span class="pr-8">Nama Siswa</span>
                    <input type="text" name="nama_siswa" placeholder="Nama Siswa" value="{{ $edit->nama_siswa }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8">Tempat Lahir</span>
                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $edit->tempat_lahir }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8">Tanggal Lahir</span>
                    <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="{{ $edit->tgl_lahir }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8">Telepon</span>
                    <input type="text" name="telp_siswa" placeholder="No Telepon" value="{{ $edit->telp_siswa }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <input type="hidden" name="nis" placeholder="NIS" value="{{ $edit->nis }}" class="input input-bordered" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Simpan</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection