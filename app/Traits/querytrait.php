<?php

namespace App\Traits;

use App\Models\Content;
use Illuminate\Support\Facades\DB;

trait QueryTrait
{
    public function getCountRequestCouach()
    {
        $count = DB::table('coaches')->where('approved', 'look')->count();
        return $count;
    }
    function arr_type()
    {
        $id = DB::table('player_training_plans')
            ->where('id_player', auth()->user()->player->id)
            ->where('status','active')
            ->pluck('id_training_plan');
          
        $contents_id = DB::table('contents_training_plans')
            ->whereIn('id_training_plan', $id)
            ->pluck('id_content');
           
        $contents = new Content();
        foreach ($contents_id as $content_id)
        {
          
            $contents = DB::table('contents')->whereIn('id', $contents_id)
                ->get();
        }
        return $contents->toArray();
    }
}