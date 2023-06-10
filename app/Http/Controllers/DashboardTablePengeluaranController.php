<?php

namespace App\Http\Controllers;

use App\Models\TablePengeluaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardTablePengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tablepengeluaran.index', [
            'pengeluaran' => TablePengeluaran::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tablepengeluaran.create');
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
            'keterangan' => ['required'],
            'waktu' => ['required'],
            'biaya' => ['required']
        ]);

        TablePengeluaran::create($validatedData);

        return redirect('/dashboard/tablepengeluaran')->with('success', 'Produk Berhasil Ditambahkan !');
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
    public function edit(TablePengeluaran $tablepengeluaran)
    {
        return view('dashboard.tablepengeluaran.edit', [
            'tablepengeluaran' => $tablepengeluaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TablePengeluaran $tablepengeluaran)
    {
        $validatedData = $request->validate([
            'keterangan' => ['required'],
            'waktu' => ['required'],
            'biaya' => ['required']
        ]);

        TablePengeluaran::where('id', $tablepengeluaran->id)
            ->update($validatedData);

        return redirect('/dashboard/tablepengeluaran')->with('success', 'Produk berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TablePengeluaran $tablepengeluaran)
    {
        TablePengeluaran::destroy($tablepengeluaran->id);

        return redirect('/dashboard/tablepengeluaran')->with('success', 'Produk berhasil dihapus !');
    }
}
