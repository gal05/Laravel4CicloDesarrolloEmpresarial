<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use App\Models\Post;

class User extends Model
{
    public  function posts()
    {
    	return $this->hasMany('App\Models\Post');
    }
    public $timestamps = false;
}
