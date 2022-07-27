<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class transaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 1; $i++) :
            DB::table('transaksis')->insert([
                'id_transaksi' => $i,
                'user_id' => $i,
                'produk_id' => $i,
                'ongkir_id' => $i,
                'pembayaran_id' => $i,
                'jml_pembelian' => 5,
                'total' => "1000 $i",
                'status' => false
            ]);
        endfor;
    }
}
