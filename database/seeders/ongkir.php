<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ongkir extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) :
            DB::table('ongkirs')->insert([
                'id_ongkir' => $i,
                'nama_kota' => 'surabaya',
                'ongkir' => '100' . $i
            ]);
        endfor;
    }
}
