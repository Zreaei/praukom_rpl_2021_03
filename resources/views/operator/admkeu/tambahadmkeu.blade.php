@extends('layouts.main')
@section('container')

<form method="POST" action="simpan">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Tambah admkeu</span>
                </label>
                <label class="input-group">
                    <span class="pr-8">Nama</span>
                    <input type="text" name="nama_admkeu" placeholder="nama" class="input input-bordered" />
                </label>
                <div class="form-control">
                    <label class="input-group">
                        <span class="pr-8">User</span>
                        <select class="select select-bordered" name="user">
                            <option value="default">None</option>
                            @foreach ($user as $item)
                                <option value="{{ $item->id_user }}">{{ $item->username }}</option>
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