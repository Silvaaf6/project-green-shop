@extends('layouts.backend')
@section('content')
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Edit Barang </h5>
                <form class="row g-3" method="POST" action="{{ route('barang.update', $barang->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" value="{{ $barang->nama_barang }}">
                        <label class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" name="gambar_produk">
                        <label class="form-label">Nama Kategori</label>
                        <select class="form-control" name="id_kategori">
                            @foreach ($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                            @endforeach
                        </select>
                        <label class="form-label">Deskripsi</label>
                        <input type="number" class="form-control" name="deskripsi" value="{{ $barang->deskripsi }}">
                        <label class="form-label">Stok</label>
                        <input type="number" class="form-control" name="stok" value="{{ $barang->stok }}">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" value="{{ $barang->harga }}">

                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-grd-primary px-4 text-light">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
