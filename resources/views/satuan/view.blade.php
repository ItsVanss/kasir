@extends('layout.app')

@section('title', 'Kasir - Detail')

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
                <form>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" value="{{$satuan->kode}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="{{$satuan->nama}}" readonly>
                    </div>
                    <div class="button">
                    <a href="/satuan" class="btn btn-sm btn-outline-warning"><i class="fas fa-caret-left"></i> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
