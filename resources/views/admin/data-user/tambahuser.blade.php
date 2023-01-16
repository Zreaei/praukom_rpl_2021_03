@extends('layouts.main')
@section('container')

<form method="POST" action="simpan">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Tambah User</span>
                </label>
                <label class="input-group">
                    <span class="pr-8">Username</span>
                    <input type="text" name="username" placeholder="username" class="input input-bordered" required />
                </label>
                <label class="input-group">
                    <span class="pr-8">Password</span>
                    <input type="text" name="password" placeholder="password" class="input input-bordered" required />
                </label>
                <label class="input-group">
                    <span class="pr-8">Email</span>
                    <input type="email" name="email" placeholder="email" class="input input-bordered" required />
                </label>
                <div class="form-control">
                    <label class="input-group">
                        <span class="pr-8">Level</span>
                        <select class="select select-bordered" name="level">
                            <option value="default">None</option>
                            @foreach ($level as $item)
                                <option value="{{ $item->id_level }}">{{ $item->nama_level }}</option>
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