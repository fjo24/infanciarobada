<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefinicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('definiciones', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('descripcion');
            $table->text('orden')->nullable();
            $table->string('pdf')->nullable();
            $table->string('imagen')->nullable();
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
        Schema::dropIfExists('definiciones');
    }
}
