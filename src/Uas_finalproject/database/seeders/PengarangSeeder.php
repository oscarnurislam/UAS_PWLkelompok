<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengarang=[
            [   'nama_pengarang' => 'alam',
                'lokasi' => 'magelang',
                'tanggal' => 02032012,

            ],
            [   'nama_pengarang' => 'maret',
                'lokasi' => 'trenggalek',
                'tanggal' => 03032020,
   
            ],
            [   'nama_pengarang' => 'febri',
                'lokasi' => 'madiur',
                'tanggal' => 03142020,
  
            ],
            [   'nama_pengarang' => 'lala',
                'lokasi' => 'jakarta',
                'tanggal' => 03022020,

            ]
        ];

        DB::table('pengarang')->insert($pengarang);
    }
}
