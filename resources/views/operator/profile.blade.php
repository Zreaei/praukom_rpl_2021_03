@extends('layouts.main')
@section('container')

<div class="item-center">

<div class="card w-full bg-base-100 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="https://placeimg.com/400/225/arch" alt="Profile" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <div class="card-level">OPERATOR</div>
  </div>
</div>

<div class="overflow-x-auto">
  <table class="table w-full">
    <!-- row 1 -->
    <tr>
        <th>ID Operator</th> 
        <td>OPR001</td>
    </tr>
    
      <!-- row 2 -->
      <tr>
        <th>ID User</th>
        <td>USR001</td>
      </tr>
      <!-- row 3 -->
      <tr>
        <th>Nama</th>
        <td>example</td>
      </tr>
      <!-- row 4 -->
      <tr>
        <th>Email</th>
        <td>example@example.com</td>
      </tr>
  </table>
</div>
</div>

@endsection