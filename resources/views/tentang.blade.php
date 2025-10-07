@extends('layouts.app')

@section('title', 'Tentang DriveSurat')

@section('content')
<div class="bg-white shadow rounded-lg p-6 max-w-3xl mx-auto text-center">
  <h2 class="text-2xl font-bold mb-4">Tentang DriveSurat</h2>

  <div class="flex flex-col items-center gap-4">
    <!-- Foto Developer -->
   <img src="{{ asset(path: 'storage/image/puhh.jpg') }}" class="w-32 h-32 rounded-full object-cover shadow-md" alt="Foto Developer">


    <!-- Info Developer -->
    <div>
      <h3 class="text-xl font-semibold">Puhan Rialdo Wijaya</h3>
      <p class="text-gray-600">NIM: 2331730065</p>
    </div>
  </div>

  <div class="mt-6 text-gray-600">
    <p>Developer aplikasi <strong>DriveSurat</strong>. Aplikasi ini dibuat untuk mempermudah pengarsipan surat secara digital.</p>
  </div>

  <div class="mt-6">
    <p class="text-sm text-gray-500">Versi 1.0.0</p>
  </div>
</div>
@endsection
