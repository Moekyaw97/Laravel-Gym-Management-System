<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
     protected $fillable =[
    	'name','price','day','discount','category_id'
    ];
    
     public function memberpackage()
    {
    	return $this->hasMany('App\Memberpackage');
    }
}
