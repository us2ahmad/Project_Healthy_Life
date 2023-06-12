<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait QueryTrait
{
    public function getCountRequestCouach()
    {
        $count = DB::table('coaches')->where('approved', 'look')->count();
        return $count;
    }
}