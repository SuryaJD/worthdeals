<?php

namespace App\Jobs\Flipkart\Fetch;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Feeds implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $response = Http::withHeaders([
            "Fk-Affiliate-Id" => config('services.flipkart.key'),
            "Fk-Affiliate-Token"=> config('services.flipkart.token'),
        ])->get('https://affiliate-api.flipkart.net/affiliate/api/surajjadh1.json');
        $list = Arr::get(collect($response->json())->get('apiGroups'),'affiliate.apiListings');
        foreach ($list as $key => $value) {
            $category_feed = collect(Arr::get($value,'availableVariants'))->get('v1.1.0')['get'];
            if ($key == 'mens_clothing') {
                Log::emergency($category_feed);
                Products::dispatch($category_feed);
            }
        }
    }
}
