<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\barang;
use App\Models\kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    public function index()
    {
        $barang = barang::all();
        return view('barang.index', compact('barang'));

    }

    public function filter(Request $request)
    {
        $kategoriNama = $request->input('nama_kategori');
        if ($kategoriNama) {
            $kategori = kategori::where('nama_kategori', $kategoriNama)->first();
            if ($kategori) {
                $barang = barang::where('id_kategori', $kategori->id)->orderBy('id', 'desc')->get();
            } else {
                $barang = collect(); // Empty collection if category not found
            }
        } else {
            $barang = barang::orderBy('id', 'desc')->get();
        }

        $kategori = kategori::all();
        return view('layouts.produk', compact('barang', 'kategori', 'kategoriNama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        // $kategori = Barang::all();

        return view('barang.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => ['required', 'string', 'max:255'],
        ]);

        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->gambar_produk = $request->gambar_produk;
        $barang->id_kategori = $request->id_kategori;
        $barang->deskripsi = $request->deskripsi;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;

        if ($request->hasFile('gambar_produk')) {
            $img = $request->file('gambar_produk');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/barang', $name);
            $barang->gambar_produk = $name;
        }

        $barang->save();

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    public function edit($id)
    {
        $kategori = Kategori::all();
        $barang = Barang::findOrFail($id);

        return view('barang.edit', compact('kategori', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kategori' => ['required', 'string', 'max:255'],
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->gambar_produk = $request->gambar_produk;
        $barang->id_kategori = $request->id_kategori;
        $barang->deskripsi = $request->deskripsi;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;

        if ($request->hasFile('gambar_produk')) {
            $img = $request->file('gambar_produk');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/barang', $name);
            $barang->gambar_produk = $name;
        }

        $barang->save();

        return redirect()->route('barang.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Dihapus!');

    }
}
