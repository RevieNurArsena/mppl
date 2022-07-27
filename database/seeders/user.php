<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) :
            DB::table('users')->insert([
                'id_user' => $i,
                'nama' => 'revie' . $i,
                'password' => bcrypt('12345'),
                'notelp' => '08418648166' . $i,
                'email' => 'revie' . $i . '@gmail.com',
                'alamat' => "Jl abc $i",
                'kota' => "surabaya"
            ]);
        endfor;
    }
}
