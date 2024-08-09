<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class m_userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach(range(1,5) as $index){
            DB::table('m_user')->insert([
                'level_id' => '2',
                'username' => $faker->name,
                'nama' => $faker->name,
                'password' => Hash::make('12345'),

            ]);
        }
    }
}
