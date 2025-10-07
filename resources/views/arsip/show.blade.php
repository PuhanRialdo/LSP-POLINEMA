@extends('layouts.app')

@section('title', 'Detail Arsip')

@section('content')
<div class="bg-white shadow rounded-lg p-6 max-w-3xl mx-auto">
  <h2 class="text-xl font-bold mb-4">Detail Arsip</h2>
  <div class="space-y-2">
    <p><strong>Nomor Surat:</strong> {{ $arsip->nomor_surat }}</p>
    <p><strong>Kategori:</strong> {{ $arsip->kategori->nama }}</p>
    <p><strong>Judul:</strong> {{ $arsip->judul }}</p>
    <p><strong>Tanggal Arsip:</strong> {{ $arsip->tanggal_arsip }}</p>
  </div>

  <div class="mt-6">
    <iframe src="{{ asset('storage/' . $arsip->file) }}" class="w-full h-[500px] border"></iframe>
  </div>

  <div class="mt-4">
    <a href="{{ route('arsip.index') }}" class="text-blue-600 hover:underline">← Kembali</a>
  </div>
</div>
@endsection
