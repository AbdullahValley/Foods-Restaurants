<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodCourtsTable extends Migration
{
    public function up()
    {
        Schema::create('food_courts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id')->unique();
            $table->integer('sub_location_id')->unsigned();
            $table->string('name')->comment('SEO Slug');
            $table->string('display_name');
            $table->string('details')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('status')->default(1)->comment('1=Active, 0=Inactive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('food_courts');
    }
}
