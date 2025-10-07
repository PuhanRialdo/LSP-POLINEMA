<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArsipController extends Controller
{
    public function index()
    {
        $arsip = Arsip::with('kategori')->get();
        return view('arsip.index', compact('arsip'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('arsip.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'file' => 'required|mimes:pdf|max:2048'
        ]);

        $path = $request->file('file')->store('arsip', 'public');

        Arsip::create([
            'nomor_surat' => $request->nomor_surat,
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'tanggal_arsip' => now(),
            'file' => $path
        ]);

        return redirect()->route('arsip.index')->with('success', 'Arsip berhasil ditambahkan.');
    }

    public function show(Arsip $arsip)
    {
        return view('arsip.show', compact('arsip'));
    }

    public function edit(Arsip $arsip)
    {
        $kategori = Kategori::all();
        return view('arsip.edit', compact('arsip', 'kategori'));
    }

    public function update(Request $request, Arsip $arsip)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'file' => 'nullable|mimes:pdf|max:2048'
        ]);

        $data = $request->only(['nomor_surat', 'kategori_id', 'judul']);

        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($arsip->file && Storage::disk('public')->exists($arsip->file)) {
                Storage::disk('public')->delete($arsip->file);
            }
            $data['file'] = $request->file('file')->store('arsip', 'public');
        }

        $arsip->update($data);
        return redirect()->route('arsip.index')->with('success', 'Arsip berhasil diperbarui.');
    }

    public function destroy(Arsip $arsip)
    {
        if ($arsip->file && Storage::disk('public')->exists($arsip->file)) {
            Storage::disk('public')->delete($arsip->file);
        }

        $arsip->delete();
        return redirect()->route('arsip.index')->with('success', 'Arsip berhasil dihapus.');
    }

   public function download(Arsip $arsip)
{
    if (!$arsip->file || !Storage::disk('public')->exists($arsip->file)) {
        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }

    return Storage::disk('public')->download($arsip->file);
}

}
