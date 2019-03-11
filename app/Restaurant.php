<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected  $primaryKey = 'unique_id';

    public $incrementing = false;

    public function foods(){

        return $this->hasMany('App\Food', 'restaurant_id', 'id')->orderBy('id', 'desc');;
    }
}
