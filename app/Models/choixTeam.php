<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choixTeam extends Model
{
    use HasFactory;
    public function choix(){
        return $this->belongsTo('App\Models\Team','choix_id');
    }
}
