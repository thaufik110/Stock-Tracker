<?php

namespace App\Http\Controllers;

use App\Models\TableUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardTableUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tableuser.index', [
            'user' => TableUser::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tableuser.create');
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
            'username' => ['required'],
            'email' => ['required']
        ]);

        TableUser::create($validatedData);

        return redirect('/dashboard/tableuser')->with('success', 'Produk Berhasil Ditambahkan !');
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
    public function edit(TableUser $tableuser)
    {
        return view('dashboard.tableuser.edit', [
            'tableuser' => $tableuser
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableUser $tableuser)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required']
        ]);

        TableUser::where('id', $tableuser->id)
            ->update($validatedData);

        return redirect('/dashboard/tableuser')->with('success', 'Produk berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableUser $tableuser)
    {
        TableUser::destroy($tableuser->id);

        return redirect('/dashboard/tableuser')->with('success', 'Produk berhasil dihapus !');
    }
}
