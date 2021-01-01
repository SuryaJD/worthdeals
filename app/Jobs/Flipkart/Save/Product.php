<?php

namespace App\Jobs\Flipkart\Save;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Product as ProductModel;

class Product implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $product;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // dd($this->product);
        $product = new ProductModel();
        $product->name = $this->product['productBaseInfoV1']['title'];
        $product->slug = Str::slug($this->product['productBaseInfoV1']['title']);
        $product->uuid = Str::uuid();
        $product->offers = $this->product['productBaseInfoV1']['offers'] ;
        $product->images = $this->product['productBaseInfoV1']['imageUrls'];
        $product->regular_price = $this->product['productBaseInfoV1']['maximumRetailPrice']['amount'];
        $product->sale_price = $this->product['productBaseInfoV1']['flipkartSpecialPrice']['amount'];
        $product->link = $this->product['productBaseInfoV1']['productUrl'];
        $product->tags = ['mens_clothing'];
        $extra['brand'] = $this->product['productBaseInfoV1']['productBrand'];
        $extra['seller'] = $this->product['productShippingInfoV1']['sellerName']; 
        $product->extra = $extra;
        $product->type = 'App\Models\Product';
        $product->save();
    }
}
