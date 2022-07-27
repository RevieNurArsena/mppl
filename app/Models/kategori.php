<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kategori';
    protected $guarded = ['id_kategori'];

    public function produk()
    {
        return $this->hasMany(produk::class);
    }
}
