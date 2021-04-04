<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_siswa')->insert([
            'nisn' => '0032430408',
            'nis' => '181910068',
            'nama_lengkap' => 'Rizal Muhamad Rohman',
            'username' => 'rizalrohman',
            'password' => Hash::make('12345'),
            'id_kelas' => 8,
            'alamat' => 'Nagrak Cianjur',
            'tlp' => '089518894819',
            'id_spp' => 1,
        ]);

        DB::table('table_siswa')->insert([
            'nisn' => '0032430908',
            'nis' => '181910069',
            'nama_lengkap' => 'Sandi Lesmana',
            'username' => 'sandilesmana',
            'password' => Hash::make('12345'),
            'id_kelas' => 8,
            'alamat' => 'Sukataris Cianjur',
            'tlp' => '085759902052',
            'id_spp' => 1,
        ]);


    }
}
