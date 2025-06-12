<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\Products;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('produk.index', compact('products'));
    }

    public function create()
    {
        $tokos = Toko::all();
        return view('produk.create', compact('tokos'));
    }

    public function show($id_toko)
    {
        $products = Products::where('id_toko', $id_toko)->get();
        $toko = Toko::find($id_toko);
        return view('produk.show', compact('products', 'toko'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'id_toko' => 'required|exists:tokos,id_toko',
        ]);

        Products::create($request->only(['nama_produk', 'harga', 'stok', 'id_toko']));

        return redirect()->route('produk.index');
    }



    public function edit($id_produk)
    {
        $product = Products::findOrFail($id_produk);
        $tokos = Toko::all();
        return view('produk.edit', compact('product', 'tokos'));
    }


    public function update(Request $request, $id_produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'id_toko' => 'required|exists:tokos,id_toko',
        ]);

        $product = Products::findOrFail($id_produk);
        $product->update($request->only(['nama_produk', 'harga', 'stok', 'id_toko']));

        return redirect()->route('produk.index')->with('success', 'Product updated successfully.');
    }


    public function destroy($id_produk)
    {
        $product = Products::findOrFail($id_produk);
        $product->delete();
        return redirect()->route('produk.index');
    }
}
