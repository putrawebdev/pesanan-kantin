<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        return view('pesanan.list', compact('product'));
    }
    public function addlist()
    {
        $product = product::all();
        return view('pesanan.add', compact('product'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama_user' => 'required',
                'nama_product' => 'required',
                'harga_product' => 'required'
            ]
        );
        product::create($validated);
        return redirect()->route('pesanan.index')->with('success', 'Pesanan Berhasil Di Tambahkan, Silahkan Tunggu');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::all();
        $productDetail = product::findOrFail($id);
        return view('pesanan.add', compact('product', 'productDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            [
                'nama_user' => 'required',
                'nama_product' => 'required',
                'harga_product' => 'required'
            ]
        );
        product::where('id', $id)->update($validated);
        return redirect()->route('pesanan.index')->with('success', 'Pesanan Berhasil Di Edit, Silahkan Tunggu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productDetail = product::findOrFail($id);
        $productDetail->delete();
        return redirect()->route('pesanan.index')->with('success', 'Pesanan Berhasil Di Hapus');
    }
}
