@extends('layouts.backend')
@section('content')
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Tambah Data Transaksi</h5>
                <form class="row g-3" method="POST" action="{{ route('cart.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-12">
                        <label for="input16" class="form-label">Nama Barang</label>
                        <div class="position-relative input-icon">
                            <select name="id_barang" class="form-control">
                                @foreach ($barang as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="input16" class="form-label">Nama Pembeli</label>
                        <div class="position-relative input-icon">
                            <select name="id_users" class="form-control">
                                @foreach ($users as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="input17" class="form-label">Tanggal Pemesanan</label>
                        <div class="position-relative input-icon">
                            <input type="date" id="tgl_pesan" name="tgl_pesan" class="form-control" placeholder="tgl_pesan">
                            <span class="position-absolute top-50 translate-middle-y"></span>
                            @error('tgl_pesan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="input17" class="form-label">Jumlah</label>
                        <div class="position-rela tive input-icon">
                            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah">
                            <span class="position-absolute top-50 translate-middle-y"></span>
                            @error('jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
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
