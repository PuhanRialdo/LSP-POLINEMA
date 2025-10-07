@extends('layouts.app')

@section('title', 'Daftar Arsip')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-bold">📁 Daftar Arsip Surat</h2>
    <a href="{{ route('arsip.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow-md transition duration-200">
      + Tambah Arsip
    </a>
  </div>

  <table class="min-w-full border border-gray-300 border-collapse">
    <thead class="bg-gray-200">
      <tr>
        <th class="px-4 py-2 border border-gray-300">No</th>
        <th class="px-4 py-2 border border-gray-300">Nomor Surat</th>
        <th class="px-4 py-2 border border-gray-300">Kategori</th>
        <th class="px-4 py-2 border border-gray-300">Judul</th>
        <th class="px-4 py-2 border border-gray-300">Tanggal</th>
        <th class="px-4 py-2 border border-gray-300">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($arsip as $a)
      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2 border border-gray-300">{{ $loop->iteration }}</td>
        <td class="px-4 py-2 border border-gray-300">{{ $a->nomor_surat }}</td>
        <td class="px-4 py-2 border border-gray-300">{{ $a->kategori?->nama ?? '-' }}</td>
        <td class="px-4 py-2 border border-gray-300">{{ $a->judul }}</td>
        <td class="px-4 py-2 border border-gray-300">{{ \Carbon\Carbon::parse($a->tanggal_arsip)->translatedFormat('d M Y') }}</td>
        <td class="px-4 py-2 border border-gray-300 flex gap-2">
          <!-- Tombol Lihat -->
          <a href="{{ route('arsip.show', $a->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md shadow-md transition duration-200">
            Lihat
          </a>

          <!-- Tombol Edit -->
          <a href="{{ route('arsip.edit', $a->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md shadow-md transition duration-200">
            Edit
          </a>

          <!-- Tombol Hapus -->
          <form action="{{ route('arsip.destroy', $a->id) }}" method="POST" class="inline" onsubmit="return confirm('Hapus arsip ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md shadow-md transition duration-200">
              Hapus
            </button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="6" class="text-center text-gray-500 py-4">Belum ada arsip.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
