<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabinetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabinetas', function (Blueprint $table) {
            $table->id();
            $table->string('kabinetas');
            $table->integer('telefonas');
            $table->string('dirba_nuo');
            $table->string('dirba_iki');
            $table->string('miestas');
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
        Schema::dropIfExists('kabinetas');
    }
}
