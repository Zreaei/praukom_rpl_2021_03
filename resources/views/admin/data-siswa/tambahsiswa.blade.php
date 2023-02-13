@extends('layouts.main')
@section('container')

<form method="POST" action="simpan">
    @csrf
    <div class="pt-36">
        <div class="form-control border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Tambah Siswa</span>
                </label>
                <label class="input-group">
                    <span class="pr-8">NIS</span>
                    <input type="text" name="nis" placeholder="NIS" class="input input-bordered" />
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
                    <input type="text" name="nama_siswa" placeholder="Nama Siswa" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8">Tempat Lahir</span>
                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8">Tanggal Lahir</span>
                    <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8">Telepon</span>
                    <input type="text" name="telp_siswa" placeholder="No Telepon" class="input input-bordered" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection