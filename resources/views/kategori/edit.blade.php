@extends('layout.app')

@section('title', 'Kasir - Edit')

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
                <form action="/kategori/{{$kategori->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" value="{{$kategori->kode}}" name="kode" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="{{$kategori->nama}}" name="nama">
                    </div>
                    <a href="/kategori" class="btn btn-sm btn-warning"><i class="fas fa-caret-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
