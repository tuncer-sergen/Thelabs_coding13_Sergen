<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class art_cat extends Model
{
    use HasFactory;
    public function article()
    {
        return $this->belongsTo('App\Models\Blog');
    }
    
    public function categorie()
    {
        return $this->belongsTo('App\Models\categorie','cat_id');
    }
}
