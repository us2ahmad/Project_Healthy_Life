<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = [
        'height',
        'weight',
        'level',
    ];
    public function User(){

        return $this->belongsTo(User::class);

    }
    
    public function Evaluation()
    {

        return $this->hasone(Evaluation::class, 'id_plaeyr');

    }

    public function Payment (){

        return $this->hasone(Payment::class, 'id_plaeyr');
    }

    public function Ban (){

        return $this->hasone(Ban::class, 'id_plaeyr');
    }

    public function Violation (){

        return $this->hasmany(Violation::class, 'id_plaeyr');
    }

    public function Player_Training_Plan (){

        return $this->hasmany(Player_Training_Plan::class, 'id_plaeyr');
    }

     public function Complaints (){

        return $this->hasmany(Complaints::class, 'id_plaeyr');
    }

    public function Coach(){

        return $this->belongsTo(Coach::class);

    }



    //  public function Coach()
    //  {
    //      return $this->belongsTo(Coach::class, 'id_coach');
    //  }


}
