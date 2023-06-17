@extends('dashboard.layouts.main')

@section('main')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-white rounded h-100 p-4">
            <h1 class="mb-4 text-dark">Create New Pengeluaran</h1>
            <hr class="dropdown-divider" style=" height: 3px">
            <div class="col-lg-8">
                <form method="post" action="/dashboard/tablepengeluaran">
                    @csrf
                    <div class="mb-3 text-dark">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control  bg-white @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" required value="{{ old('keterangan') }}">
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="waktu" class="form-label">Waktu</label>
                        <input type="text" class="form-control  bg-white @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}">
                        @error('waktu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-dark">
                        <label for="biaya" class="form-label">Biaya</label>
                        <input type="text" class="form-control  bg-white @error('biaya') is-invalid @enderror" id="biaya" name="biaya" value="{{ old('biaya') }}">
                        @error('biaya')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create Pengeluaran</button>
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