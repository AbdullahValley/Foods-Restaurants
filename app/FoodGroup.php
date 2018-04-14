<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodGroup extends Model
{
    protected  $primaryKey = 'unique_id';

    public $incrementing = false;
}
