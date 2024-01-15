<!-- Modal -->
<div class="modal fade" id="form-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/barang/store" method="POST">
                    @csrf


                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control" name="kode" required>
                        </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kategori_id">Kategori</label>
                                <select class="custom-select" name="kategori_id" required>
                                <option value="" disabled selected>Pilih Kategori</option> <!--placeholder-->
                                    @foreach ($kategori as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="penerbit_id">Penerbit</label>
                                <select class="custom-select" name="penerbit_id" required>
                                <option value="" disabled selected>Pilih Penerbit</option> <!--placeholder-->
                                    @foreach ($penerbit as $penerbit)
                                    <option value="{{$penerbit->id}}">{{$penerbit->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" name="stok" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="number" class="form-control" name="harga_jual" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary float-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
