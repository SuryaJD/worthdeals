<?php

namespace App\Console\Commands;

use App\Jobs\Flipkart\Fetch\Feeds;
use Illuminate\Console\Command;

class FetchFlipkartProductFeeds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flipkart:fetch:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        Feeds::dispatch();
    }
}
