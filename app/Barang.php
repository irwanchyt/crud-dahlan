<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table  ='barangs';

    protected $guarded = [];

    protected $fillable =
    [
        'nama_barang',
        'harga_beli',
        'harga_jual',
        'stok',
        'foto'
    ];
}
