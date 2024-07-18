<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\barang;
use App\Models\kategori;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required|integer|min:1',
        ]);

        $produk = barang::find($id);

        if (!$produk) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $quantity = $request->input('jumlah', 1);

        $keranjang = cart::where('id_user', Auth::id())->where('id_barang', $id)->first();

        if ($keranjang) {
            $keranjang->jumlah += $quantity;
            $keranjang->save();
        } else {
            cart::create([
                'id_user' => Auth::id(),
                'id_barang' => $id,
                'jumlah' => $quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to Keranjang!');
    }

    public function index()
    {
        $kategori = kategori::all();
        $keranjangItem = cart::where('id_user', Auth::id())->with('barang')->get();
        return view('layouts.cart', compact('keranjangItem', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $keranjang = cart::where('id_user', Auth::id())->where('id', $id)->first();

        if ($keranjang) {
            $keranjang->jumlah = $request->jumlah;
            $keranjang->save();
            return redirect()->back()->with('success', 'Keranjang updated successfully!');
        }

        return redirect()->back()->with('error', 'Keranjang item not found!');
    }

    public function delete($id)
    {
        $keranjang = cart::where('id_user', Auth::id())->where('id', $id)->first();

        if ($keranjang) {
            $keranjang->delete();
            return redirect()->back()->with('success', 'Keranjang item removed successfully!');
        }

        return redirect()->back()->with('error', 'Keranjang item not found!');
    }

    public function clear()
    {
        cart::where('id_user', Auth::id())->delete();
        return redirect()->back()->with('success', 'All Keranjang items removed successfully!');
    }
}