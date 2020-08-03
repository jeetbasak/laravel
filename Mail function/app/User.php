<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{




public function mobile(){

	return $this->hasMany(mobile::class);
}


    }
