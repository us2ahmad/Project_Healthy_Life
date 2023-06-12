<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player_Training_Plan extends Model
{
    use HasFactory;

          public function Plaeyr()
     {
          return $this->belongsTo(Plaeyr::class,'id_plaeyr');
     }
     public function Training_Plan()
    {
        return $this->belongsto(Training_Plan::class,'id_Training_Plan');
    }
    
}
