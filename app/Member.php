<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
     protected $fillable =[
    	'user_id','name','profile','phoneno','address','weight','membertype_id'
    ];
    
}
  