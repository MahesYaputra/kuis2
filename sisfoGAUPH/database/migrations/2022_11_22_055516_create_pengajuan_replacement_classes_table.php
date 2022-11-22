<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePengajuanReplacementClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_replacement_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_mata_kuliah')->nullable();
            $table->string('kelas')->nullable();
            $table->dateTime('jadwal_tanggal_replacement')->nullable();
            $table->string('jadwal_jam_kuliah')->nullable();
            $table->dateTime('tanggal_replacement')->nullable();
            $table->string('jam_replacement')->nullable();
            $table->string('alasan_replacement')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengajuan_replacement_classes');
    }
}
