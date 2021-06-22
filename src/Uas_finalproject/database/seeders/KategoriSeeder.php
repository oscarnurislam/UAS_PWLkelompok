<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori=[
            ['nama_kategori' => 'bingkai foto',],
            ['nama_kategori' => 'tanaman hias',],
            ['nama_kategori' => 'dekorasi dinding',],
            ['nama_kategori' => 'dekorasi meja',],
            ['nama_kategori' => 'dekorasi lantai',],

        ];
        DB::table('kategori')->insert($kategori);
    }
}
