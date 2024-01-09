<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            $barang = new Barang;
            $barang->kode = $request->kode;
            $barang->nama = $request->nama;
            $barang->stok = $request->stok;
            $barang->harga_jual = $request->harga_jual;
            $barang->harga_beli = $request->harga_beli;
            $barang->satuan_id = $request->satuan_id;
            $barang->save();
       

        return redirect('barang')->with('sukses', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = Barang::find($id);

        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->stok = $request->stok;
        $barang->harga_jual = $request->harga_jual;
        $barang->harga_beli = $request->harga_beli;
        $barang->satuan_id = $request->satuan_id;
        $barang->update();
   

        return redirect('barang')->with('sukses', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('barang')->with('sukses', 'Data berhasil di Hapus');
    }
}
