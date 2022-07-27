<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class metode_pembayaran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) :
            DB::table('metode_pembayarans')->insert([
                'id_pembayaran' => $i,
                'nama_metode' => "metode $i",
                'no' => '000' . $i,
                'atas_nama' => 'salim'
            ]);
        endfor;
    }
}
