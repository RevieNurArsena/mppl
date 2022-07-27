<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class produk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 1; $i++) :
            DB::table('produks')->insert([
                'id_produk' => $i,
                'nama_produk' => "produk $i",
                'deskripsi' => "<p> deskripsi $i </p>",
                'kategori_id' => $i,
                'stok' => $i,
                'harga' => "100 $i",
                'gambar1' => "image\LYZ4GooMPVRyXqs1POaxyqXIoTwjQ9tapCMJ5fUT.png",
                'gambar2' => "image\CiYTjTRCdjh7Zqp3OVVNqfV5p5mYC3UJjtjJhM5X.png",
                'gambar3' => "image\HMAd30es2QsJLCc6JzQw3l1N1uP5A6piI2v9oZUz.png",
                'gambar4' => "image\CbZXIv9VIx53PcvF8fV3T6mwN0KbOKSuy6yoXNeJ.png",
                'gambar5' => "image\OO014P9C1PuOm3vA73HUfp1zuxvSoz4yEv8I2HcG.png",
            ]);
        endfor;
    }
}
