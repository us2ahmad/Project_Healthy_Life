<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdatePlanStatus extends Command
{
    protected $signature = 'update:plan-status';
    protected $description = 'Update plan status based on end date';

    public function handle()
    {
        DB::table('player_training_plans')->where('edate', Carbon::now()->format('Y-m-d'))->update([
            'status' => 'unactive'
        ]);
        $this->info('Plan status updated successfully.');
    }
}