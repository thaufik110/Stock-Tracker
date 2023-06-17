<?php

namespace App\Http\Controllers;

use App\Models\TablePegawai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardTablePegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tablepegawai.index', [
            'pegawai' => TablePegawai::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tablepegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'alamat' => ['required'],
            'jenis_kelamin' => ['required'],
            'nomor_telepon' => ['required']
        ]);

        TablePegawai::create($validatedData);

        return redirect('/dashboard/tablepegawai')->with('success', 'Produk Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TablePegawai $tablepegawai)
    {
        return view('dashboard.tablepegawai.edit', [
            'tablepegawai' => $tablepegawai
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TablePegawai $tablepegawai)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'alamat' => ['required'],
            'jenis_kelamin' => ['required'],
            'nomor_telepon' => ['required']
        ]);

        TablePegawai::where('id', $tablepegawai->id)
            ->update($validatedData);

        return redirect('/dashboard/tablepegawai')->with('success', 'Produk berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TablePegawai $tablepegawai)
    {
        TablePegawai::destroy($tablepegawai->id);

        return redirect('/dashboard/tablepegawai')->with('success', 'Produk berhasil dihapus !');
    }
}
