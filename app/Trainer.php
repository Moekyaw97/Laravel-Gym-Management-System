<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable =[
    	'name','photo','phoneno','address'
    ];
     public function memberpackage()
    {
    	return $this->hasMany('App\Memberpackage');
    }
}
