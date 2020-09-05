<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function news(){
        return $this->hasMany('App\News','Parent_id');
    }
}