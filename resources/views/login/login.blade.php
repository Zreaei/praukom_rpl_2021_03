@extends('layouts.main')
@section('container')

<div class="bg-gradient-to-tl from-[#B5C7E8] to-[#2D5EBB] h-screen">
  
  <div class="flex justify-between mb-5">
    <div class="w-full max-h-60 ">
      <div class="flex justify-center p-10">
        <span class="uppercase text-5xl text-[#FFA434] font-bold text-center">ONE PRAKTIK-IN</span>
      </div> 
      <div class="flex justify-center p-10">
        <img src="/storage/img/foto.png" alt="" class="w-full h-w-full">
      </div>
    </div>

    <div class="w-full max-h-60 pr-20">
      <div class="flex justify-center p-10 pt-24">
        <span class="uppercase text-4xl text-white font-bold text-center">welcome back,<span class="inline-block uppercase text-2xl text-[#000000] text-opacity-50 font-bold text-center">Log in now to continue</span></span>
      </div>
      <div class="flex justify-center screen px-14">
        <div class="card-body shadow-xl bg-white rounded-xl">
          @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
          @endif
          @if ($errors->any())
          @foreach($errors->all() as $err)
            <p class="alert alert-error">{{ $err }}</p>
          @endforeach
          @endif
          <form method="POST" action="{{ route('login.action') }}">
            @csrf
            <div class="form-control">
              <label class="pb-2 pt-3"><span class="label-text text-lg font-semibold">Username :</span></label>
              <input type="text" class="input input-bordered bg-white" placeholder="Username" name="username" value="{{ old('username') }}" required/>
            </div>
            <div class="form-control">
              <label class="pb-2 pt-3"><span class="label-text text-lg font-semibold">Password :</span></label>
              <input type="password" class="input input-bordered bg-white" placeholder="Password" name="password" required />
            </div>
            <div class="form-control mt-6">
              <button class="btn btn-ghost bg-gradient-to-b from-[#2D5EBB] to-[#417EF2] text-lg font-bold text-white hover:bg-[#2D5EBB] hover:bg-opacity-70">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection






<!-- <div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <img src="/storage/img/1.png" alt="">
      <div class="text-center lg:text-left">
        <h1 class="text-5xl font-bold">Login now!</h1>
      </div>
      <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        
      </div>
    </div>
  </div> -->

