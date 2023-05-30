<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'id_coache',
        'id_player',
        'interaction',
        ];
    public function Plaeyr()
    {
        return $this->belongsto(Player::class,'id_plaeyr');
    }

    public function Coach()
    {
        return $this->belongsto(Coach::class,'id_coach');
    }

}
