<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'description',
        'content',
        'type',
        'image_path',
        'id_coache',
    ];
    public function coach(){
        return $this->belongsTo(Coach::class);
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
}
