<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibliotecarioLectorLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliotecario_lector_libro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bibliotecario_id')->nullable();
            $table->foreign('bibliotecario_id')->references('id')->on('bibliotecario');
            $table->unsignedBigInteger('lector_id')->nullable();
            $table->foreign('lector_id')->references('id')->on('lector');  
            $table->unsignedBigInteger('libro_id');
            $table->foreign('libro_id')->references('id')->on('libro');            
            $table->dateTime('inicio');
            $table->dateTime('fin');
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
        Schema::dropIfExists('bibliotecario_lector_libro');
    }
}
