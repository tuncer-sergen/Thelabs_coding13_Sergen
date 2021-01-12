<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
    public function article(){
        return $this->belongsToMany('App\Models\Blog');
    }
    public function art_tag(){
        return $this->hasMany('App\Models\art_tag');
    }
}
