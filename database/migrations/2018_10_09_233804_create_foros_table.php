<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foros', function (Blueprint $table) {
            $table->increments('id');
            $table->text('correo')->nullable();
            $table->text('nombre')->nullable();
            $table->text('direccion')->nullable();
            $table->text('localidad')->nullable();
            $table->text('provincia')->nullable();
            $table->text('telefono')->nullable();
            $table->text('pagina')->nullable();
            $table->text('lng');
            $table->text('lat');
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
        Schema::dropIfExists('foros');
    }
}
