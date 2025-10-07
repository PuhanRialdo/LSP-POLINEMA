@extends('layouts.app')

@section('title', 'Tambah Arsip')

@section('content')
<div class="bg-white shadow rounded-lg p-6 max-w-lg mx-auto">
  <h2 class="text-xl font-bold mb-4">Tambah Arsip Surat</h2>

  <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="block font-semibold mb-1">Nomor Surat</label>
      <input type="text" name="nomor_surat" class="w-full border-gray-300 rounded-md shadow-sm" required>
    </div>
    <div class="mb-3">
      <label class="block font-semibold mb-1">Kategori</label>
      <select name="kategori_id" class="w-full border-gray-300 rounded-md shadow-sm">
        @foreach ($kategori as $k)
          <option value="{{ $k->id }}">{{ $k->nama }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label class="block font-semibold mb-1">Judul</label>
      <input type="text" name="judul" class="w-full border-gray-300 rounded-md shadow-sm" required>
    </div>
    <div class="mb-3">
      <label class="block font-semibold mb-1">File Surat (PDF)</label>
      <input type="file" name="file" class="w-full border-gray-300 rounded-md shadow-sm" required>
    </div>
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Simpan</button>
  </form>
</div>
@endsection
