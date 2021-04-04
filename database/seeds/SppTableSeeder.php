<?php

use Illuminate\Database\Seeder;

class SppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_spp')->insert([
            'tahun' => 2018,
            'nominal' => 250000,
        ]);

        DB::table('table_spp')->insert([
            'tahun' => 2019,
            'nominal' => 275000,
        ]);

        DB::table('table_spp')->insert([
            'tahun' => 2020,
            'nominal' => 300000,
        ]);
    }
}
