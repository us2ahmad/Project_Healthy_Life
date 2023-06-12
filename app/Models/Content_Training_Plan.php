<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content_Training_Plan extends Model
{
    use HasFactory;
    protected $fillable=['id_training_plan','id_content'];
}
