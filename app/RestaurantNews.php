<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantNews extends Model
{
    protected  $primaryKey = 'unique_id';

    public $incrementing = false;
}
