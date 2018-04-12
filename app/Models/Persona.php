<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //Laravel espera una una tabla en plurar osea -> no persona sino personas
    protected $table="persona";
    public  $timestamps=false;

}
