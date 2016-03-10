<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    
    // one-to-many connection with hikes table 
    public function hike(){
        return $this->belongsTo('App\Hike');
    }
    
    // many-to-many connection with hikers table using pivot table events_hikers
    public function hikers(){
        return $this->belongsToMany('App\Hiker', 'events_hikers');
    }
}
