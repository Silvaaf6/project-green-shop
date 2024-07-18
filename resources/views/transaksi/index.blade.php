@extends('layouts.backend')
@section('content')
    <h6 class="mb-0 text-uppercase">Data Transaksi</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="col-lg-2">
                <a href="{{ route('cart.create') }}" class="btn btn-grd btn-grd-success px-4 raised d-flex gap-2">
                    <i class="material-icons-outlined">account_circle</i>
                    Tambah Data Transaksi
                </a>
            </div>
            <table class="table mb-0 table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama barang</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $item)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $item->barang->nama_barang }}</td>
                            <td>{{ $item->users->name }}</td>
                            <td>{{ $item->tgl_pesan }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ $item->total }}</td>
                            <td>
                                <a href="{{ route('cart.show', $item->id) }}" class="btn btn-grd btn-grd-info px-3"><i
                                        class="material-icons-outlined">search</i></a>
                                <a href="{{ route('cart.edit', $item->id) }}"
                                    class="btn btn-grd btn-grd-warning px-5">Edit</a>
                                <a class="btn btn-grd btn-grd-danger px-5"
                                    href="{{ route('cart.destroy', $item->id) }}"
                                    onclick="event.preventDefault();
                            document.getElementById('destroy-form').submit();">
                                    Hapus
                                </a>

                                <form id="destroy-form" action="{{ route('cart.destroy', $item->id) }}" method="POST"
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
