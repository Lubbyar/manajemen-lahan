<?php

use App\Models\Lahan;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posisis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pinjam')->default(Carbon::now());
            $table->string('garis_lintang')->default(0);
            $table->string('garis_bujur')->default(0);
            $table->foreignIdFor(Lahan::class)->nullable()->nullOnDelete();
            $table->string('mdpl')->default(0);
            $table->boolean('validasi')->default(false);
            $table->boolean('authorisasi')->default(false);

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
        Schema::dropIfExists('posisis');
    }
}
