@extends('layout.app')

@section('title', 'Kasir - Edit')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Barang</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Barang</h4>
            </div>
            <div class="card-body">
                <form action="/barang/{{$barang->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" value="{{$barang->kode}}" name="kode" readonly>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="kategori_id">Kategori</label>
                            <select class="custom-select" name="kategori_id" required>
                                @foreach ($kategori as $kategori)
                                <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" value="{{$barang->nama}}" name="nama" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="penerbit_id">Penerbit</label>
                            <select class="custom-select" name="penerbit_id" required>
                                @foreach ($penerbit as $penerbit)
                                <option value="{{$penerbit->id}}">{{$penerbit->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" value="{{$barang->pengarang}}" name="pengarang" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md 6">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" value="{{$barang->stok}}" name="stok" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="number" class="form-control" value="{{$barang->harga_jual}}" name="harga_jual" required>
                        </div>
                    </div>


                    <a href="/barang" class="btn btn-sm btn-warning">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
