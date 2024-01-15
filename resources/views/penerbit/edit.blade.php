@extends('layout.app')

@section('title', 'Kasir - Edit')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Penerbit</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>View Data Penerbit</h4>
            </div>
            <div class="card-body">
                <form action="/penerbit/{{$penerbit->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="{{$penerbit->nama}}" name="nama">
                    </div>
                    <a href="/penerbit" class="btn btn-sm btn-warning"><i class="fas fa-caret-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
