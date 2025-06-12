<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'id_produk',
        'nama_produk',
        'harga',
        'stok',
        'id_toko',
    ];

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'id_toko');
    }
}
