<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_siswa', function (Blueprint $table) {
            $table->string('nisn', 10);
            $table->string('nis', 9);
            $table->string('nama_lengkap', 100);
            $table->integer('id_kelas');
            $table->text('alamat');
            $table->string('tlp', 16);
            $table->integer('id_spp');
            $table->timestamps();
            $table->primary('nisn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_siswa');
    }
}
