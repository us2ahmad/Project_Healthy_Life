<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factصories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    use HasFactory;

public function Player()
{

   return $this->belongsto( Plaeyr::class, 'id_player');

}




}