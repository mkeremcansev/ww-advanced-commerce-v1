<?php

namespace App\Console\Commands;

use App\Jobs\HitUpdate;
use App\Models\Hit;
use Carbon\Carbon;
use Illuminate\Console\Command;

class HitUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hit:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hit update';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Hit::where('created_at', '<', Carbon::now()->subMinute())->delete();
    }
}
