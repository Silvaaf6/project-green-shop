@extends('layouts.backend')
@section('content')
    <h6 class="mb-0 text-uppercase">Data Kategori</h6>
    <hr>
    <div class="card">
        <div class="card-body">

            <table class="table mb-0 table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $item)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $item->nama_kategori }}</td>
                            <td>
                                <a href="{{ route('kategori.edit', $item->id) }}"
                                    class="btn btn-grd btn-grd-warning px-5">Edit</a>
                                <a class="btn btn-grd btn-grd-danger px-5" href="{{ route('kategori.destroy', $item->id) }}"
                                    onclick="event.preventDefault();
                            document.getElementById('destroy-form').submit();">
                                    Hapus
                                </a>

                                <form id="destroy-form" action="{{ route('kategori.destroy', $item->id) }}" method="POST"
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
