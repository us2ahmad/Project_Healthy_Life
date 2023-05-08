<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;


    protected $fillable = [
        'certificate',
        'experience',
        'approved',
    ];

    public function User(){

        return $this->belongsTo(User::class);

    }
    public function Payment (){

        return $this->hasone(Payment::class, 'id_coach');
    }


    public function Players()
    {
        return $this->hasmany(Player::class,'id_coach');
    }
    public function Evaluation ()
    {
        return $this->hasmany(Evaluation::class,'id_coach');
    }

    public function Content()
    {
        return $this->hasmany(Content::class,'id_coach');
    }

    public function Training_Plan ()
    {
        return $this->hasmany(Training_Plan::class,'id_coach');
    }
    public function Article ()
    {
        return $this->hasmany(Article::class);
    }

}
