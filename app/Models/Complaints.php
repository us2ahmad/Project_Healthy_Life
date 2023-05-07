<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    use HasFactory;

public function Plaeyr (){

return $this->belongsto(Player::class,'id_plaeyr');

}

}
