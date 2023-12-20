<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pembelian',
        'id_produk',
        'jumlah',
        'harga_produk',
    ];
}
