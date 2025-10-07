@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<div class="bg-white shadow rounded-lg p-6 max-w-lg mx-auto">
  <h2 class="text-xl font-bold mb-4">Tambah Kategori</h2>

  <form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="block font-semibold mb-1">Nama Kategori</label>
      <input type="text" name="nama" class="w-full border-gray-300 rounded-md shadow-sm" required>
    </div>
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Simpan</button>
  </form>
</div>
@endsection
