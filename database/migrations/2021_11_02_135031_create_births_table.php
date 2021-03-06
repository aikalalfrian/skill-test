<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('births', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_of_birth');
            $table->string('gender');
            $table->integer('weight');
            $table->integer('length');
            $table->string('mother_name');
            $table->string('mother_birth')->nullable()->default(NULL);
            $table->integer('gestational_age');
            $table->string('givebirth_duration');
            $table->string('givebirth_type');
            $table->longText('notes')->nullable()->default(NULL);
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
        Schema::dropIfExists('births');
    }
}
