<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDestacadoHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destacado_homes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->string('link')->nullable();
            $table->string('imagen');
            $table->date('fecha');
            $table->text('contenido')->nullable();
            $table->string('orden');
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
        Schema::dropIfExists('destacado_homes');
    }
}
