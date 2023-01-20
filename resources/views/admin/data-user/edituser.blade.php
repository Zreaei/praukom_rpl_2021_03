@extends('layouts.main')
@section('container')

<form method="POST" action="simpanedit">
    @csrf
    <div class="pt-36">
        <div class="form-control border border-zinc-900 rounded w-1/4 mx-auto">
            <div class="mx-auto">
                <label class="label">
                    <span class="label-text mx-auto">Edit Operator</span>
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">username</span>
                    <input type="text" name="username" placeholder="username" value="{{ $edit->username }}" class="input input-bordered"/>
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">password</span>
                    <input type="text" name="password" placeholder="password" value="{{ $edit->password }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">email</span>
                    <input type="text" name="email" placeholder="email" value="{{ $edit->email }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8 bg-white">Level</span>
                    <select class="select select-bordered" name="level">
                        <option value="default">Choose Level</option>
                        @foreach ($level as $item)
                            <option value="{{ $item->id_level }}">{{ $item->nama_level }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="id_user" value="{{ $edit->id_user }}" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Simpan</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection