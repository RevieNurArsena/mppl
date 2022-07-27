<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ongkir extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ongkir';
    protected $guarded = ['id_ongkir'];

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
