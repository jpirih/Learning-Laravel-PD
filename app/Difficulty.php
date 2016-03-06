<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    protected $table = 'difficulties';
    
    public function hikes(){
         return $this->hasMany('App\Hike');
    }
}
