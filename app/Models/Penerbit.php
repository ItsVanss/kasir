<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\barang;


class Penerbit extends Model
{
    use HasFactory;

    public function barang()

    {
        return $this -> hasMany(Barang::class);
    }
    protected $fillable = [
        'nama',
    ];
}
