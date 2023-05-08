<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'content',
        'id_coache',
    ];
    public function coach(){
        return $this->belongsTo(Coach::class);
    }
}
