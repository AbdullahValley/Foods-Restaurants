<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id')->unique();
            $table->integer('user_id')->unsigned();
            $table->string('name')->comment('SEO Slug');
            $table->string('display_name');
            $table->longtext('details')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->string('facilities')->nullable();
            $table->integer('capacity')->nullable();
            $table->time('open')->nullable();
            $table->time('close')->nullable();
            $table->float('commission_rate', 4,2)->default(0);
            $table->string('pros')->nullable();
            $table->string('cons')->nullable();
            $table->string('our_opinion')->nullable();
            $table->string('types')->nullable();
            $table->string('categories')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->string('sub_location')->nullable();
            $table->string('food_court')->nullable();
            $table->string('food_groups')->nullable();
            $table->string('competitors')->nullable();
            $table->string('video')->nullable();
            $table->string('rating')->nullable();
            $table->string('featured')->default(0)->comment('1=Featured, 0=Non Featured');
            $table->boolean('status')->default(1)->comment('1=Active, 0=Inactive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
