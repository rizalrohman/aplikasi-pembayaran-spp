<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_petugas');
            $table->integer('id_spp');
            $table->string('nisn', 10);
            $table->string('bulan_dibayar', 8);
            $table->string('tahun_dibayar', 4);
            $table->integer('jml_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pembayaran');
    }
}
