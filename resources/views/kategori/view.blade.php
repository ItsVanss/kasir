@extends('layout.app')

@section('title', 'Kasir - Detail')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Kategori</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>View Data Kategori</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="{{$kategori->nama}}" readonly>
                    </div>
                    <div class="button">
                    <a href="/kategori" class="btn btn-sm btn-outline-warning"><i class="fas fa-caret-left"></i> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
