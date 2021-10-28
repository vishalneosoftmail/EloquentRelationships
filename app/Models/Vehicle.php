<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Vehicle extends Model
{
    use HasFactory;

    //return user of each vehicle
    public function getUser(){
        return $this->belongsTo( User::class,'user_id', 'id')->withDefault([
        'name' => 'Annanymous',
    ]);
    }
}
