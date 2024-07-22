<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_payment extends Model
{
    use HasFactory;
    public function payment(){
        return $this->hasMany('App\Models\Payment');
    }
}
