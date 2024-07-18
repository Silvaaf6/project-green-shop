@extends('layouts.backend')
@section('content')
    <h6 class="mb-0 text-uppercase">DATA BARANG</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="col-lg-2">
                <a href="{{ route('barang.create') }}" class="btn btn-grd btn-grd-success px-4 raised d-flex gap-2">
                    <i class="material-icons-outlined">account_circle</i>
                    Tambah Barang
                </a>
            </div>
            <table class="table mb-0 table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Gambar Produk</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $data)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $data->nama_barang }}</td>
                            <td>
                                <img src="{{ asset('/images/barang/' . $data->gambar_produk) }}" width="100">
                            </td>
                            <td>{{ $data->kategori->nama_kategori }}</td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>{{ $data->stok }}</td>
                            <td>{{ $data->harga }}</td>
                            <td>
                                {{-- <a href="{{ route('barang.show', $data->id) }}" class="btn btn-grd btn-grd-info px-3"><i
                                        class="material-icons-outlined">search</i></a> --}}
                                <a href="{{ route('barang.edit', $data->id) }}"
                                    class="btn btn-grd btn-grd-warning px-5">Edit</a>
                                <a class="btn btn-grd btn-grd-danger px-5" href="{{ route('barang.destroy', $data->id) }}"
                                    onclick="event.preventDefault();
                            document.getElementById('destroy-form').submit();">
                                    Hapus
                                </a>

                                <form id="destroy-form" action="{{ route('barang.destroy', $data->id) }}" method="POST"
                                    class="d-none">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
