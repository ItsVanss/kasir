<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kategori;

class Barang extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }

    protected $fillable = [
       'kode',
       'kategori_id',
       'nama',
       'penerbit_id',
       'pengarang',
       'stok',
       'harga_jual',
    ];

}
