<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTableaCachorro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cachorros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipo');
            $table->string('nome');
            $table->string('dono');
            $table->dateTime('nascimento');
            $table->foreign('tipo')->references('id')->on('racas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cachorros');
    }
}
