<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class KatalogController extends Controller
{
    // Halaman Beranda / Home
    public function home()
    {
        return view('katalog.home');
    }

    // Halaman Katalog & Pencarian
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $produks = Produk::when($search, function ($query, $search) {
            return $query->where('nama_produk', 'like', "%{$search}%")
                         ->orWhere('kategori', 'like', "%{$search}%");
        })->get();

        return view('katalog.index', compact('produks', 'search'));
    }

    // Halaman Detail Produk
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('katalog.show', compact('produk'));
    }

    // Halaman Admin (Daftar Produk untuk CRUD)
    public function adminIndex()
    {
        $produks = Produk::all();
        return view('katalog.admin', compact('produks'));
    }

    // Form Tambah Produk
    public function create()
    {
        return view('katalog.create');
    }

    // Simpan Produk Baru (Dengan Validasi Sesuai Soal)
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'required',
        ]);

        Produk::create($request->all());

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Form Edit Produk
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('katalog.edit', compact('produk'));
    }

    // Update Produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'required',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil diperbarui!');
    }

    // Hapus Produk
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil dihapus!');
    }
}
