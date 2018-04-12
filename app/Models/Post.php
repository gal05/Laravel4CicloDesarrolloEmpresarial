<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	//protected $table="posts";
    public function user()
    {
    	return $this->belangsTo('App\Models\User');
    }
	public $timestamps = false;
}
