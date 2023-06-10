<?php

namespace App\Http\Controllers;

use App\Models\TablePemasukan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardTablePemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tablepemasukan.index', [
            'pemasukan' => TablePemasukan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tablepemasukan.create');
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

        TablePemasukan::create($validatedData);

        return redirect('/dashboard/tablepemasukan')->with('success', 'Produk Berhasil Ditambahkan !');
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
    public function edit(TablePemasukan $tablepemasukan)
    {
        return view('dashboard.tablepemasukan.edit', [
            'tablepemasukan' => $tablepemasukan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TablePemasukan $tablepemasukan)
    {
        $validatedData = $request->validate([
            'keterangan' => ['required'],
            'waktu' => ['required'],
            'biaya' => ['required']
        ]);

        TablePemasukan::where('id', $tablepemasukan->id)
            ->update($validatedData);

        return redirect('/dashboard/tablepemasukan')->with('success', 'Produk berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TablePemasukan $tablepemasukan)
    {
        TablePemasukan::destroy($tablepemasukan->id);

        return redirect('/dashboard/tablepemasukan')->with('success', 'Produk berhasil dihapus !');
    }
}
