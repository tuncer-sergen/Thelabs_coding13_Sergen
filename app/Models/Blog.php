<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function tag(){
        return $this->belongsToMany('App\Models\tag');
    }
    public function categorie(){
        return $this->belongsToMany('App\Models\categorie');
    }
    public function art_tag(){
        return $this->hasMany('App\Models\art_tag','art_id');
    }
    public function art_cat(){
        return $this->hasMany('App\Models\art_cat','art_id');
    }
}
