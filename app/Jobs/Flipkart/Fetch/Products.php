<?php

namespace App\Jobs\Flipkart\Fetch;

use App\Jobs\Flipkart\Save\Product as SaveProduct;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
Use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class Products implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $feed;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($feed)
    {
        $this->feed = $feed;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $contents = Http::withHeaders([
            "Fk-Affiliate-Id" => config('services.flipkart.key'),
            "Fk-Affiliate-Token"=> config('services.flipkart.token'),
        ])->get($this->feed);
        foreach ($contents['products'] as $key => $product) {
            SaveProduct::dispatch($product);
        }

        
    }
}
