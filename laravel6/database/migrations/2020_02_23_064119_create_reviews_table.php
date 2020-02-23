<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{

    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('genre');
            $table->varchar('story');
            $table->varchar('body');
            $table->string('image');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
