<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_Plan extends Model
{
    use HasFactory;
    public function Coach()
    {
        return $this->belongsto(Coach::class,'id_coach');
    }
   public function Player_Training_Plan ()
   {

     return $this->hasmany(Player_Training_Plan::class,'id_Training_Plan');

   }

   public function Content()
    {
        return $this->belongsto(Content::class,'id_content');
    }

}
