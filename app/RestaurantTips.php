<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantTips extends Model
{
    protected  $primaryKey = 'unique_id';

    public $incrementing = false;
}
