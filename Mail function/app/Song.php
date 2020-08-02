<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
//protected $table='actors'; // am taking an other table to this model .. but bydefault it takes 'songs' table



public function actor()
{

	return $this->hasOne(Actor::class);
}










}
