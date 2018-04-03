<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('restaurant_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id')->unique();
            $table->integer('restaurant_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('title');
            $table->string('details')->nullable();
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->string('rating')->nullable();
            $table->string('featured')->default(0)->comment('1=Featured, 0=Non Featured');
            $table->boolean('status')->default(1)->comment('1=Active, 0=Inactive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurant_comments');
    }
}
