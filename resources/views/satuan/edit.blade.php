@extends('layout.app')

@section('title', 'Kasir - Edit')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Satuan Barang</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>View Data Satuan Barang</h4>
            </div>
            <div class="card-body">
                <form action="/satuan/{{$satuan->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" value="{{$satuan->kode}}" name="kode" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="{{$satuan->nama}}" name="nama">
                    </div>
                    <a href="/satuan" class="btn btn-sm btn-warning"><i class="fas fa-caret-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
