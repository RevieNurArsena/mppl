<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class produk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk';
    protected $guarded = ['id_produk'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'kategori_id');
    }

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
