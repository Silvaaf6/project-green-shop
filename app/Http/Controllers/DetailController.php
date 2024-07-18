<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class DetailController extends Controller
{
    public function tampilkan($id){
        $barang= barang::findOrFail($id);
        return view('layouts.detail', compact('barang'));
    }
}
