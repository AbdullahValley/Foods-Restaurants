<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantComparesTable extends Migration
{
    public function up()
    {
        Schema::create('restaurant_compares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id')->unique();
            $table->integer('user_id')->unsigned();
            $table->integer('restaurant_one')->unsigned();
            $table->integer('restaurant_two')->unsigned();
            $table->string('slug');
            $table->string('rating')->nullable();
            $table->string('featured')->default(0)->comment('1=Featured, 0=Non Featured');
            $table->boolean('status')->default(1)->comment('1=Active, 0=Inactive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurant_compares');
    }
}
