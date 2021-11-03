<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersalinansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persalinans', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_lahir');
            $table->string('jam_lahir');
            $table->string('jenis_kelamin');
            $table->string('berat');
            $table->string('panjang');
            $table->string('nama_ibu');
            $table->string('lahir_ibu')->nullable()->default(NULL);
            $table->string('usia_gestasi');
            $table->string('lama_persalinan');
            $table->string('jenis_persalinan');
            $table->longText('catatan')->nullable()->default(NULL);
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
        Schema::dropIfExists('persalinans');
    }
}
