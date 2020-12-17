<?php

namespace App\Jobs;

use App\Models\Pageview;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class LogPageviews implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $pageview;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $pageview)
    {
        $this->pageview = $pageview;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Pageview::create($this->pageview);
    }
}
