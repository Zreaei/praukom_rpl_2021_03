@extends('layouts.main')
@section('container')

<div class="bg-white h-screen">
  
  <div class="flex justify-between mb-5">
    <div class="w-full h-screen max-h-60 ">
      <div class="flex justify-center h-screen p-24">
        <img src="/storage/img/1.png" alt="" class="w-full h-w-full">
      </div>
    </div>

    <div class="w-full h-screen max-h-60 pr-10">
      <div class="flex justify-center screen pb-5 pt-40 px-10">
        <span class="uppercase text-4xl text-[#2D5EBB] font-bold text-center">welcome back,<span class="inline-block uppercase text-2xl text-[#000000] text-opacity-50 font-bold text-center">Log in now to continue</span></span>
      </div> 
       
      <div class="flex justify-center screen px-14">
        <div class="card-body">
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
              <input type="text" class="input input-bordered" placeholder="Username" name="username" value="{{ old('username') }}" required/>
            </div>
            <div class="form-control">
              <label class="pb-2 pt-3"><span class="label-text text-lg font-semibold">Password :</span></label>
              <input type="password" class="input input-bordered" placeholder="Password" name="password" required />
            </div>
            <div class="form-control mt-6">
              <button class="btn btn-ghost bg-[#2D5EBB] text-lg font-bold text-white hover:bg-[#2D5EBB] hover:bg-opacity-70">Login</button>
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

