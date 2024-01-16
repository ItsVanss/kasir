<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Penerbit;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;



class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();
        $now = Carbon::now();
        $tahun_bulan = $now->year . $now->month . $now->day;
        $cek = Barang::count();

        if ($cek == 0) {
            $urut = 1;
            $nomor = $tahun_bulan . str_pad($urut, 4, '0', STR_PAD_LEFT);
        } else {
            $ambil = Barang::all()->last();
            $urut = (int)substr($ambil->kode, -4) + 1;
            $nomor = $tahun_bulan . str_pad($urut, 4, '0', STR_PAD_LEFT);
        }

        return view('barang.index', compact('barang', 'kategori', 'penerbit', 'nomor'));

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
            $barang->kategori_id = $request->kategori_id;
            $barang->nama = $request->nama;
            $barang->penerbit_id = $request->penerbit_id;
            $barang->pengarang = $request->pengarang;
            $barang->stok = $request->stok;
            $barang->harga_jual = $request->harga_jual;
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
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();

        return view('barang.edit', compact('barang','kategori','penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->kode = $request->kode;
        $barang->kategori_id = $request->kategori_id;
        $barang->nama = $request->nama;
        $barang->penerbit_id = $request->penerbit_id;
        $barang->pengarang = $request->pengarang;
        $barang->stok = $request->stok;
        $barang->harga_jual = $request->harga_jual;
        $barang->update();
   

        return redirect('barang')->with('sukses', 'Data Berhasil Diupdate');
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

    public function print($id)
    {
        $barang = Barang::find($id);

        $pdf = Pdf::loadView('barang.print', compact('barang'));
        $pdf->setPaper('A4');
        return $pdf->stream();
    }
}
