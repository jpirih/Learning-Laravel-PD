<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hike extends Model
{
   protected $table = 'hikes';
    // one-to-many connection hikes difficulties 
    public function difficulty(){
        return $this->belongsTo('App\Difficulty');
    }
    // povezava hike guide - one hike has one guide
    public function guide(){
        return $this->belongsTo('App\Hiker');
    }
    // one-to-many connection events-hikes 
    public function events(){
        return $this->hasMany('App\Event');
    }
}
