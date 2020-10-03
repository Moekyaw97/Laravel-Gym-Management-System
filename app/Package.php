<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
     protected $fillable =[
    	'name','price','day','discount','category_id'
    ];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
