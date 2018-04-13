<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantType extends Model
{
    protected  $primaryKey = 'unique_id';

    public $incrementing = false;
}
