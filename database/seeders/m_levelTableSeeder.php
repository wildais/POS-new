<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class m_levelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_level')->insert([[
            'level_kode' => 'KSR',
            'level_nama' => 'Kasir',
        ],
        [
            'level_kode' => 'MGR',
            'level_nama' => 'Manager',
    ]]);
    }
}
