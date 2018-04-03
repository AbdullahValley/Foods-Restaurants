<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id')->unique();
            $table->integer('user_id')->unsigned();
            $table->integer('restaurant_id')->unsigned();
            $table->string('name')->comment('SEO Slug');
            $table->string('display_name');
            $table->string('details')->nullable();
            $table->string('photo')->nullable();
            $table->string('pros')->nullable();
            $table->string('cons')->nullable();
            $table->string('our_opinion')->nullable();
            $table->string('types')->nullable();
            $table->string('categories')->nullable();
            $table->string('food_court')->nullable();
            $table->string('food_groups')->nullable();
            $table->string('competitors')->nullable();
            $table->string('rating')->nullable();
            $table->string('featured')->default(0)->comment('1=Featured, 0=Non Featured');
            $table->boolean('status')->default(1)->comment('1=Active, 0=Inactive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
