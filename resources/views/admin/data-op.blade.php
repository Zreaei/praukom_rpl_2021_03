@extends('layouts.main')
@section('container')

@foreach ($data as $item)
    <h1>{{ $item->nama_operator  }}</h1>
    <h2>{{ $item->id_operator }}</h2>
@endforeach 

@endsection