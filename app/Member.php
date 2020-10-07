<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Membertype;

class Member extends Model
{
     protected $fillable =[
    	'user_id','name','profile','phoneno','address','weight','membertype_id'
    ];

      public function user()
    {
    	return $this->belongsTo('App\User');
    }
    

     public function membertype()
    {
    	return $this->hasMany('App\Membertype');
    }

     public function memberpackage()
    {
      return $this->hasMany('App\Memberpackage');
    }
    
}
  