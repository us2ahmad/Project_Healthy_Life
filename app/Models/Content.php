<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_coache',
        'title',
        'description',
        'type',
        'link',
    ];
    
    public function Coach()
    {
        return $this->belongsto(Coach::class,'id_coach');
    }

    public function Training_Plan ()
   {

     return $this->hasmany( Training_Plan::class,'id_content');

   }



}
