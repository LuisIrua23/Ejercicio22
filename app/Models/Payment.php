<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function collaborator(){
        return $this->belongsTo('App\Models\Collaborator');
    }

    public function type_payment(){
        return $this->belongsTo('App\Models\Type_payment');
    }
    
}
