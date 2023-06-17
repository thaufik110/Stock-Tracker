{{-- @dd($tablepegawai) --}}

@extends('dashboard.layouts.main')

@section('main')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
   <div class="col-12">
      <div class="bg-secondary rounded h-100 p-4">
         <h6 class="mb-4">Laporan</h6>
         <form class="row g-3" method="post" action="{{route('cetaklaporan')}}" target="_blank">
            @csrf
            <div class="col-10">
               <select class="form-select" name="tabel">
                  <option value="pegawai">Tabel Pegawai</option>
                  <option value="pengeluaran">Tabel Pengeluaran</option>
                  <option value="pemasukan">Tabel Pemasukkan</option>
                  <option value="produk">Tabel Produk</option>
               </select>
            </div>
            <div class=" col-2 d-grid gap-2">
               <button type="submit" class="btn btn-primary mb-3">Cetak</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Table End -->
@endsection