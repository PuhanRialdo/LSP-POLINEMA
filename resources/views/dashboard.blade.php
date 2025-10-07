@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
  <h2 class="text-2xl font-bold mb-4">Selamat Datang di DriveSurat!</h2>
  <p class="text-gray-600">Kelola arsip surat dengan mudah, cepat, dan efisien.</p>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
    <div class="bg-blue-100 p-4 rounded-lg">
      <h3 class="text-lg font-semibold">Total Arsip</h3>
      <p class="text-3xl font-bold text-blue-700 mt-2">32</p>
    </div>
    <div class="bg-green-100 p-4 rounded-lg">
      <h3 class="text-lg font-semibold">Kategori</h3>
      <p class="text-3xl font-bold text-green-700 mt-2">8</p>
    </div>
    <div class="bg-yellow-100 p-4 rounded-lg">
      <h3 class="text-lg font-semibold">Pengguna</h3>
      <p class="text-3xl font-bold text-yellow-700 mt-2">3</p>
    </div>
  </div>
</div>
@endsection
