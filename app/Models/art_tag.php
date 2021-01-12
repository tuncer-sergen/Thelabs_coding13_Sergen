<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class art_tag extends Model
{
    use HasFactory;
    public function article()
    {
        return $this->belongsTo('App\Models\Blog');
    }
    
    public function tag()
    {
        return $this->belongsTo('App\Models\tag','tag_id');
    }
}
