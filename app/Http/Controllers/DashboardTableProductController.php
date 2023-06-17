<?php

namespace App\Http\Controllers;

use App\Models\TableProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardTableProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tableproduct.index', [
            'product' => TableProduct::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tableproduct.create');
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
            'kategori' => ['required'],
            'stok' => ['required'],
            'harga' => ['required']
        ]);

        TableProduct::create($validatedData);

        return redirect('/dashboard/tableproduct')->with('success', 'Produk Berhasil Ditambahkan !');
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
    public function edit(TableProduct $tableproduct)
    {
        return view('dashboard.tableproduct.edit', [
            'tableproduct' => $tableproduct
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableProduct $tableproduct)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'kategori' => ['required'],
            'stok' => ['required'],
            'harga' => ['required']
        ]);

        TableProduct::where('id', $tableproduct->id)
            ->update($validatedData);

        return redirect('/dashboard/tableproduct')->with('success', 'Produk berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableProduct $tableproduct)
    {
        TableProduct::destroy($tableproduct->id);

        return redirect('/dashboard/tableproduct')->with('success', 'Produk berhasil dihapus !');
    }
}
