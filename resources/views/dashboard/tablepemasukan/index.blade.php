{{-- @dd($tablepemasukan) --}}

@extends('dashboard.layouts.main')

@section('main')

<!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table Pemasukan</h6>
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <a href="/dashboard/tablepemasukan/create" class="btn btn-primary mb-3">Create</a>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Biaya</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemasukan as $tablepemasukan)
                            <tr>
                                
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tablepemasukan["keterangan"] }}</td>
                                    <td>{{ $tablepemasukan["waktu"] }}</td>
                                    <td>{{ $tablepemasukan["biaya"] }}</td>
                                    <td>
                                        <a href="/dashboard/tablepemasukan/{{ $tablepemasukan->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                                        <i class="bi bi-cursor-text"></i>
                                        <form action="/dashboard/tablepemasukan/{{ $tablepemasukan->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" onclick="return confirm('Ingin menghapus pemasukan ini ?')"><i class="bi bi-x-circle"></i></button>
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