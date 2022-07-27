<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class kategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=5;$i++):
            DB::table('kategoris')->insert([
                'id_kategori' =>$i,
                'nama_kategori' => "kategori $i",
            ]);
         endfor;
        
    }
}
