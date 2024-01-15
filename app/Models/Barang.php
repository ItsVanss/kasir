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

    protected $fillable = [
       'kode',
       'kategori_id',
       'nama',
       'stok',
       'harga_jual',
    ];

}
