@extends('layouts.main')
@section('title', 'pbsekolah')
@section('container')

<form action=" {{ url("/operator/pbsekolah/tambah/tambahsimpan") }} " method="POST" enctype="multipart/form-data">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">FORM TAMBAH DATA</span>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">NAMA LEVEL : PEMBIMBING SEKOLAH</span>
                    <input type="text" name="level" value="LVL004" placeholder="PB SEKOLAH" class="input input-bordered" readonly/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">ID USER</span>
                    <input type="text" name="id_user" placeholder="Masukkan ID USER" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">ID USER</span>
                    <input type="text" name="user" placeholder="Konfirmasi ID USER" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">USERNAME</span>
                    <input type="text" name="username" placeholder="Masukkan Username" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">PASSWORD</span>
                    <input type="text" name="password" placeholder="Masukkan Password" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">EMAIL</span>
                    <input type="text" name="email" placeholder="Masukkan Email" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">NIP pbsekolah</span>
                    <input type="text" name="nip_pbsekolah" placeholder="Masukkan NIP PBSEKOLAH" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">NAMA LENGKAP</span>
                    <input type="text" name="nama_pbsekolah" placeholder="Masukkan Nama Lengkap" class="input input-bordered" required/>
                </label>
                <label class="input-group input-group-vertical">
                    <span class="pr-8">No Telp</span>
                    <input type="text" name="telp_pbsekolah" placeholder="Masukkan No Telp" class="input input-bordered" required/>
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" class="btn btn-success">TAMBAH PEMBIMBING SEKOLAH</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection