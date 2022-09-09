<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\katalog;
class KatalogController extends Controller
{

    public function index()
    {
        $katalogs = katalog::all();
        return view('admin.katalog',compact('katalogs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        katalog::create($request->all());
        return redirect()->back()->with('sukses', 'Katalog berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        katalog::find($id)->update($request->all());
        return redirect()->back()->with('sukses', 'Katalog berhasil diubah');
    }

    public function destroy($id)
    {
        katalog::find($id)->delete();
        return redirect()->back()->with('sukses', 'Katalog berhasil dihapus');
    }
}
