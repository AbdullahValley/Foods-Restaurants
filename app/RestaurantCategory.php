<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantCategory extends Model
{
    protected  $primaryKey = 'unique_id';

    public $incrementing = false;
}
