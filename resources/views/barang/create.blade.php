@extends('layouts.backend')
@section('content')
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Tambah Barang</h5>
                <form class="row g-3" method="POST" action="{{ route('barang.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-4x">
                        <label for="input13" class="form-label">Nama Barang</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="nama_barang"
                                class="form-control @error('nama_barang') is-invalid @enderror" id="input13"
                                value="{{ old('nama_barang') }}" placeholder="Nama Barang" required>
                            <span class="position-absolute top-50 translate-middle-y"></span>
                            @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <label class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" name="gambar_produk">
                    <div class="col-md-12">
                        <label for="input16" class="form-label">Nama Kategori</label>
                        <div class="position-relative input-icon">
                            <select name="id_kategori" class="form-control">
                                @foreach ($kategori as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="input17" class="form-label">Deskripsi</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
                            <span class="position-absolute top-50 translate-middle-y"></span>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="input17" class="form-label">Stok</label>
                        <div class="position-relative input-icon">
                            <input type="number" name="stok" class="form-control" placeholder="Stok">
                            <span class="position-absolute top-50 translate-middle-y"></span>
                            @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="input17" class="form-label">Harga</label>
                        <div class="position-rela tive input-icon">
                            <input type="text" name="harga" class="form-control" placeholder="Harga">
                            <span class="position-absolute top-50 translate-middle-y"></span>
                            @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-grd-primary px-4 text-light">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
