<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100)->notNull();
            $table->timestamps();
        });
        Schema::create('author', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',32)->notNull();
            $table->integer('article_id')->notNull();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article');
        Schema::drop('article');
    }
}
