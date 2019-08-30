<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('category',20);
            $table->string('facing',20);
            $table->string('adstype',20);
            $table->string('adsfor',20);
            $table->string('condition',20);
            $table->string('areatype',20);
            $table->string('division',20);
            $table->string('city',20);
            $table->string('area',20);
            $table->foreign('category')->references('name')->on('categories');
            $table->foreign('facing')->references('name')->on('facing');
            $table->foreign('adstype')->references('name')->on('adstypes');
            $table->foreign('adsfor')->references('name')->on('adsfor');
            $table->foreign('areatype')->references('name')->on('areatypes');
            $table->foreign('condition')->references('name')->on('conditions');
            $table->foreign('division')->references('name')->on('divisions');
            $table->foreign('city')->references('name')->on('cities');
            $table->foreign('area')->references('name')->on('areas');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration5
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
