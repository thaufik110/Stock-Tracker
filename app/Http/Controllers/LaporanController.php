<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TablePemasukan;
use App\Models\TablePegawai;
use App\Models\TablePengeluaran;
use App\Models\TableProduct;

class LaporanController extends Controller
{
    public function index()
    {
        return view('dashboard.laporan.index');
    }
    public function cetak(Request $req)
    {
        $tabel = $req->tabel;
        $judul = '';

        // Mendapatkan model berdasarkan pilihan tabel
        switch ($tabel) {
            case 'pegawai':
                $model = TablePegawai::all();
                $judul = "Pegawai";
                break;
            case 'pengeluaran':
                $model = TablePengeluaran::all();
                $judul = "Pengeluaran";
                break;
            case 'pemasukan':
                $model = TablePemasukan::all();
                $tabel = "Pemasukan";
                break;
            case 'produk':
                $model = TableProduct::all();
                $judul = "Produk";
                break;
            default:
                $judul = "--";
                $model = null;
                break;
        }
        // cek jika model tidak ada
        if ($model && $model->count() === 0) {
            $model = null;
        }
        // Mengirimkan data ke view
        return view('dashboard.laporan.cetak', [
            'model' => $model,
            'judul' => $judul
        ]);
    }
}
