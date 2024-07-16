<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }

    public function collaborator(){
        return $this->belongsToMany('App\Models\Collaborator');
    }
}
