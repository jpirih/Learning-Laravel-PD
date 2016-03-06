<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HikerType extends Model
{
    protected $table = 'hiker_types';

    public function hikers(){
        return $this->hasMany('App\Hiker');
    }
}
