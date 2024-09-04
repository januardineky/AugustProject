<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kategori',
        'harga',
        'stok',
        'gambar'
    ];

    public function keranjangs()
    {
        return $this->hasMany(keranjang::class, 'id_produk');
    }
}
