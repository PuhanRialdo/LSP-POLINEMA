@extends('layouts.app')
@section('title', 'Kategori Surat')
@section('content')
<div class="bg-white shadow rounded-lg p-6">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-bold">Kategori Surat</h2>
    <a href="{{ route('kategori.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow-md transition duration-200">
      + Tambah
    </a>
  </div>

  <table class="min-w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
      <tr>
        <th class="px-4 py-2 border border-gray-300">No</th>
        <th class="px-4 py-2 border border-gray-300">Nama Kategori</th>
        <th class="px-4 py-2 border border-gray-300">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($kategori as $k)
        <tr>
          <td class="px-4 py-2 border border-gray-300">{{ $loop->iteration }}</td>
          <td class="px-4 py-2 border border-gray-300">{{ $k->nama }}</td>
          <td class="px-4 py-2 border border-gray-300 flex gap-2">
            <a href="{{ route('kategori.edit', $k->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md shadow-md transition duration-200">
              Edit
            </a>
            <form action="{{ route('kategori.destroy', $k->id) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md shadow-md transition duration-200"
                onclick="return confirm('Hapus kategori ini?')">
                Hapus
              </button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center py-4 text-gray-500">Belum ada kategori.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
