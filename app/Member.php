<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Membertype;

class Member extends Model
{
     protected $fillable =[
    	'user_id','name','profile','phoneno','address','weight','membertype_id'
    ];

     public function membertype()
    {
    	return $this->belongsTo('App\Membertype');
    }
    
}
  