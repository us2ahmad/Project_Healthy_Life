<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    use HasFactory;

public function Plaeyr ()
{

return $this->belongsto(Plaeyr::class,id_plaeyr);

}


}
