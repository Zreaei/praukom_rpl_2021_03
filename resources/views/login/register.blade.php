@extends('layouts.main')
@section('container')

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center lg:text-left">
        <h1 class="text-5xl font-bold">Register</h1>
      </div>
      <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <div class="card-body">
            @if ($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-error">{{ $err }}</p>
            @endforeach
            @endif
          <form method="POST" action="{{ route('register.action') }}">
            @csrf
            <div class="form-control">
                <label class="pb-2 pt-3"><span class="label-text">Username :</span></label>
                <input type="text" class="input input-bordered" placeholder="Username" name="username" value="{{ old('username') }}" />
            </div>
            <div class="form-control">
                <label class="pb-2 pt-3"><span class="label-text">Email :</span></label>
                <input type="email" class="input input-bordered" placeholder="Email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="form-control">
                <label class="pb-2 pt-3"><span class="label-text">Password :</span></label>
                <input type="password" class="input input-bordered" placeholder="Password" name="password" />
            </div>
            <div class="form-control">
                <label class="pb-2 pt-3"><span class="label-text">Password Confirmation :</span></label>
                <input type="password" class="input input-bordered" placeholder="Password Confirmation" name="password_confirmation" />
            </div>
            <div class="form-control mt-6">
                <button class="btn btn-primary">Register</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection