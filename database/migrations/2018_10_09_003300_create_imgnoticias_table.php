<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgnoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgnoticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen');
            $table->string('orden')->nullable();
            $table->integer('noticia_id')->unsigned();

            $table->foreign('noticia_id')->references('id')->on('noticias')->onDelete('cascade');
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
        Schema::dropIfExists('imgnoticias');
    }
}
