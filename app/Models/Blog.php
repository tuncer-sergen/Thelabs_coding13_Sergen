<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function tag(){
        return $this->belongsToMany(Tag::class);
    }
    public function categorie(){
        return $this->belongsToMany(Categorie::class);
    }
}
