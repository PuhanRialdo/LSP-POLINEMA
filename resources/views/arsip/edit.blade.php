@extends('layouts.app')

@section('title', 'Kategori Surat')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-bold">Kategori Surat</h2>
    <a href="{{ route('kategori.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">+ Tambah</a>
  </div>

  <table class="min-w-full border border-gray-300">
    <thead class="bg-gray-200">
      <tr>
        <th class="px-4 py-2 border">No</th>
        <th class="px-4 py-2 border">Nama Kategori</th>
        <th class="px-4 py-2 border">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($kategori as $k)
      <tr>
        <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
        <td class="px-4 py-2 border">{{ $k->nama }}</td>
        <td class="px-4 py-2 border">
          <a href="{{ route('kategori.edit', $k->id) }}" class="text-yellow-600 hover:underline">Edit</a> |
          <form action="{{ route('kategori.destroy', $k->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button class="text-red-600 hover:underline" onclick="return confirm('Hapus kategori ini?')">Hapus</button>
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
