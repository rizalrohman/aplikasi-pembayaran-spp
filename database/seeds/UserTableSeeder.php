<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_user')->insert([
        	'nama_lengkap' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('12345'),
            'tlp' => '089518894819',
            'role' => 1,
        ]);

        DB::table('table_user')->insert([
        	'nama_lengkap' => 'Petugas',
            'username' => 'petugas',
            'password' => Hash::make('12345'),
            'tlp' => '085759902052',
            'role' => 2,
        ]);
    }
}
