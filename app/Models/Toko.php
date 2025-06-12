<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'tokos';
    protected $primaryKey = 'id_toko';
    protected $fillable = [
        'id_toko',
        'nama_toko',
        'alamat',
        'nomor_telepon',
    ];
}
