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
                    <span class="pr-8">username</span>
                    <input type="text" name="username" placeholder="username" value="{{ $username }}" class="input input-bordered"/>
                </label>
                <label class="input-group">
                    <span class="pr-8">password</span>
                    <input type="text" name="password" placeholder="password" value="{{ $password }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8">email</span>
                    <input type="text" name="email" placeholder="email" value="{{ $email }}" class="input input-bordered" />
                </label>
                <label class="input-group">
                    <span class="pr-8">level</span>
                    <input type="text" name="level" placeholder="level" value="{{ $level }}" class="input input-bordered" />
                    <input type="hidden" name="id_user" value="{{ $id_user }}" />
                </label>
                <div class="pt-3 pb-3 grid justify-items-center">
                    <button type="submit" value="simpan" class="btn btn-success">Simpan</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection