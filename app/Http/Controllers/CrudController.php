<?php

namespace App\Http\Controllers;

use App\CrudModel;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $data = CrudModel::all();
        return view('barang/index', compact('data'));
    }

    public function create()
    {
        return view('barang.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required'
        ]);
        CrudModel::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('barang.index');
    }

    public function edit($id_barang)
    {
        $data = CrudModel::find($id_barang);
        return view('barang.edit', compact('data'));
    }

    public function update(Request $request, $id_barang)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required'
        ]);
        CrudModel::find($id_barang)->update(
            [
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'deskripsi' => $request->deskripsi
            ]
        );
        return redirect()->route('barang.index');
    }

    public function destroy($id_barang)
    {
        CrudModel::find($id_barang)->delete();
        return redirect()->route('barang.index');
    }
}
