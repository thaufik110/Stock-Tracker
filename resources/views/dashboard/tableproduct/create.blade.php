@extends('dashboard.layouts.main')

@section('main')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-white rounded h-100 p-4">
            <h1 class="mb-4 text-dark">Create New Product</h1>
            <hr class="dropdown-divider" style=" height: 3px">
            <div class="col-lg-8">
                <form method="post" action="/dashboard/tableproduct">
                    @csrf
                    <div class="mb-3 text-dark">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control bg-white @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control  bg-white @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required value="{{ old('kategori') }}">
                        @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="text" class="form-control  bg-white @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok') }}">
                        @error('stok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control  bg-white @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create Product</button>
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