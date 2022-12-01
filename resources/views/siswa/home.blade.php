@extends('layouts.main')
@section('container')

<div class="container">
    <div class="flex flex-wrap">
        <div class="w-full self-center px-4 py-4">
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-blue-500">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                <button class="bg-orange-600 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-orange-800 hover:border-blue-500 rounded">
                    Button
                </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection