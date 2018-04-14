<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantReview extends Model
{
    protected  $primaryKey = 'unique_id';

    public $incrementing = false;
}
