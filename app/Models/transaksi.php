<?php

namespace App\Models;

// use App\Models\ongkir;
// use App\Models\metode_pembayaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_transaksi';
    protected $guarded = ['id_transaksi'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function produk()
    {
        return $this->belongsTo(produk::class, 'produk_id');
    }

    public function ongkir()
    {
        return $this->belongsTo(ongkir::class, 'ongkir_id');
    }

    public function metode_pembayaran()
    {
        return $this->belongsTo(metode_pembayaran::class, 'pembayaran_id');
    }
}
