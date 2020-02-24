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
            $table->integer('user_id');
            $table->string('title');
            $table->string('genre');
            $table->text('story');
            $table->text('body');
            $table->string('rating');
            $table->text('image');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
