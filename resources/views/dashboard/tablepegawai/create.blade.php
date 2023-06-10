@extends('dashboard.layouts.main')

@section('main')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-white rounded h-100 p-4">
            <h1 class="mb-4 text-dark">Create New Pegawai</h1>
            <hr class="dropdown-divider" style=" height: 3px">
            <div class="col-lg-8">
                <form method="post" action="/dashboard/tablepegawai">
                    @csrf
                    <div class="mb-3 text-dark">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control  bg-white @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control  bg-white @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control  bg-white @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control  bg-white @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                        @error('nomor_telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create Pegawai</button>
                </form>
            </div>
        </div>
        
    </div>
    
</div>
<!-- Table End -->
<script>
    document.addEventListener('trix-file-accept', function(e){e.preventDefault()})
</script>
@endsection