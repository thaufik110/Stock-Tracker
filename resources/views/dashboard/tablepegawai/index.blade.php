{{-- @dd($tablepegawai) --}}

@extends('dashboard.layouts.main')

@section('main')

<!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table Pegawai</h6>
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <a href="/dashboard/tablepegawai/create" class="btn btn-primary mb-3">Create</a>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $tablepegawai)
                            <tr>
                                
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tablepegawai["name"] }}</td>
                                    <td>{{ $tablepegawai["alamat"] }}</td>
                                    <td>{{ $tablepegawai["jenis_kelamin"] }}</td>
                                    <td>{{ $tablepegawai["nomor_telepon"] }}</td>
                                    <td>
                                        <a href="/dashboard/tablepegawai/{{ $tablepegawai->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                                        <i class="bi bi-cursor-text"></i>
                                        <form action="/dashboard/tablepegawai/{{ $tablepegawai->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" onclick="return confirm('Ingin menghapus pegawai ini ?')"><i class="bi bi-x-circle"></i></button>
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