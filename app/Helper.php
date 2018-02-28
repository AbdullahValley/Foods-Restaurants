<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    public static function getRoleName($role)
    {
        if ($role == 1) {
            return "Super Admin";
        } elseif ($role == 2) {
            return "Admin";
        } elseif ($role == 3) {
            return "Restaurant Admin";
        } elseif ($role == 4) {
            return "User";
        }
    }
}
