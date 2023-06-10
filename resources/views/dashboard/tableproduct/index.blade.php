{{-- @dd($tableproduct) --}}

@extends('dashboard.layouts.main')

@section('main')

<!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table Product</h6>
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <a href="/dashboard/tableproduct/create" class="btn btn-primary mb-3">Create</a>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Harga per Produk</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $tableproduct)
                            <tr>
                                
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tableproduct["name"] }}</td>
                                    <td>{{ $tableproduct["kategori"] }}</td>
                                    <td>{{ $tableproduct["stok"] }}</td>
                                    <td>{{ $tableproduct["harga"] }}</td>
                                    <td>
                                        <a href="/dashboard/tableproduct/{{ $tableproduct->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                                        <i class="bi bi-cursor-text"></i>
                                        <form action="/dashboard/tableproduct/{{ $tableproduct->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" onclick="return confirm('Ingin menghapus produk ini ?')"><i class="bi bi-x-circle"></i></button>
                                        </form>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- Table End -->
@endsection