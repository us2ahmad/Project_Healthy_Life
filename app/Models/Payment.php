<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public function Plaeyr()
    {
    return $this->belongsTo(Player::class, 'id_plaeyr');
    }
    public function Coach(){

        return $this->belongsTo(Coach::class,'id_coach');

    }
}
