<?php

namespace App\Console\Commands;

use App\Models\CampaignAttribute;
use Illuminate\Console\Command;

class CampaignAttributeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'campaign:attribute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Campaign attributes (product) control';

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
        CampaignAttribute::whereHas('getOneCampaignAttributeProducts', function ($query) {
            $query->whereStatus(0);
        })->delete();
    }
}
