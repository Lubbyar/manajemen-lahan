<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanamans', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->string('dokumen');
            $table->string('jenis_tanah');
            $table->string('jenis_tanaman');
            $table->string('pemilik_tanaman');
            $table->string('petani_penggarap');
            $table->string('lintang_selatan');
            $table->string('bujur_timur');
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
        Schema::dropIfExists('tanamans');
    }
}
