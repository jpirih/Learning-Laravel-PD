<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hiker extends Model
{
    protected $table = 'hikers';

    public function hiker_type(){
        return $this->belongsTo('App\HikerType');
    }

    // guide hike relationship one guide can lead a lot of different hikes  one to many
    public function hikes_guide(){
        return $this->hasMany('App\Hike');
    }
}
