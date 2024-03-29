@extends('layout.app')

@section('title', 'Kasir - Kategori')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Kategori</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Kategori</h4>
                        <div class="card-header-form">
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                data-target="#form-tambah"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th style="width: 50%">Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kategori as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>
                                        <form action="/kategori/{{$item->id}}" id="delete-form">
                                            {{-- <a href="/kategori/{{$item->id}}/show"
                                                class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i> Detail</a> --}}
                                            <a href="/kategori/{{$item->id}}/edit"
                                                class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>
                                                Edit</a>
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-sm btn-danger"
                                                id="{{$item->nama}}" data-id="{{$item->id}}"
                                                onclick="confirmDelete(this)"><i class="fa fa-trash"></i> Delete</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('kategori.form');
@endsection

@push('script')
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });

    var data_anggota = $(this).attr('data-id')
    function confirmDelete(button) {
    
        event.preventDefault()
        const id = button.getAttribute('data-id');
        const nama = button.getAttribute('id');
        swal({
                title: 'Apa Anda Yakin ?',
                text: 'Anda Akan Menghapus Data, "' + nama + '" Ketika Anda tekan OK, maka data tidak dapat dikembalikan !',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
        .then((willDelete) => {
            if (willDelete) {
              const form = document.getElementById('delete-form');
              // Setelah pengguna mengkonfirmasi penghapusan, Anda bisa mengirim form ke server
              form.action = '/kategori/' + id; // Ubah aksi form sesuai dengan ID yang sesuai
              form.submit();
            }
        });
    }
</script>
@endpush
