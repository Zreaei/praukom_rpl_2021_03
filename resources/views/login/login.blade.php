@extends('layouts.main')
@section('container')

<div class="w-1/3 mx-auto border-4 border-slate-600 rounded-2xl bg-slate-300 mt-36">
        <p class="text-center pt-4 text-2xl font-medium text-gray-900">Login</p>
        <form class="p-5">
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                <input type="email" id="email" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your Password</label>
                <input type="password" id="password" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
</div>

@endsection