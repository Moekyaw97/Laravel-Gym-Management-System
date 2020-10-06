<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;
use App\Package;
use App\Trainer;

class Memberpackage extends Model
{
    protected $fillable =[
    	'member_id','package_id','trainer_id','start_date','time'
    ];

       public function member()
    {
    	return $this->belongsTo('App\Member');
    }

     public function package()
    {
    	return $this->belongsTo('App\Package');
    }

     public function trainer()
    {
    	return $this->belongsTo('App\Trainer');
    }
}