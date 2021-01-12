<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    public function article(){
        return $this->belongsToMany('App\Models\Blog');
    }
    public function art_cat(){
        return $this->hasMany('App\Models\art_cat');
    }
}
