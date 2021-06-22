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
            [   'nama_pengarang' => '#',
                'lokasi' => '#',
                'tanggal' => #,

            ],
            [   'nama_pengarang' => '#',
                'lokasi' => '#',
                'tanggal' => #,
   
            ],
            [   'nama_pengarang' => '#',
                'lokasi' => '#',
                'tanggal' => 03142020,
  
            ],
            [   'nama_pengarang' => '#',
                'lokasi' => '#',
                'tanggal' => #,

            ]
        ];

        DB::table('pengarang')->insert($pengarang);
    }
}
