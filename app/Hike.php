<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hike extends Model
{
   protected $table = 'hikes';
    
    public function difficulty(){
        return $this->belongsTo('App\Difficulty');
    }
    // povezava hike guide - one hike has one guide
    public function guide(){
        return $this->belongsTo('App\Hiker');
    }
}
