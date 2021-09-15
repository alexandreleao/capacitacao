<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConteudoPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudo_post', function (Blueprint $table) {

            $table->bigInteger('post_id')->unsigned()->nullable();
            $table->bigInteger('conteudo_id')->unsigned()->nullable();


            $table->foreign('conteudo_id')->references('id')->on('conteudos');
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conteudo_post');
    }
}
