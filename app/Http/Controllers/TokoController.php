<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $toko = Toko::all();
        return view('toko.index', compact('toko'));
    }
    public function list()
    {
        $toko = Toko::all();
        return view('toko.list', compact('toko'));
    }

    public function create()
    {
        return view('toko.create');
    }

    public function edit($id_toko)
    {
        $toko = Toko::findOrFail($id_toko);
        return view('toko.edit', compact('toko'));
    }


    public function store(Request $request)
    {
        $table = new Toko();
        $table->nama_toko = $request->input('nama_toko');
        $table->alamat = $request->input('alamat');
        $table->nomor_telepon = $request->input('nomor_telepon');
        $table->save();
        return redirect()->route('toko.index');
    }

    public function update(Request $request, $id_toko)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string',
        ]);

        $toko = Toko::findOrFail($id_toko);
        $toko->update($request->only(['nama_toko', 'alamat', 'nomor_telepon']));

        return redirect()->route('toko.index')->with('success', 'Toko updated successfully.');
    }


    public function destroy($id)
    {
        $table = Toko::find($id);
        $table->delete();
        return redirect()->route('toko.index');
    }
}
