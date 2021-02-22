<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/pages', function () {
    return view('pages.home');
});

Route::get('/category/{category:slug}',[CategoryController::class,'show'])->name('category.single');

Route::middleware(['affiliate'])->group(function () {
    Route::get('p/{product:slug}',[ProductController::class, 'show'])->name('product.single');    
});



Route::get('product/{category}',[ProductController::class, 'category'])->name('product.category');


Route::get('flipkart/feeds',function(){
    $response = Http::withHeaders([
        "Fk-Affiliate-Id" => "Surajjadh1",
        "Fk-Affiliate-Token"=> "cca2e3d7f8d1403d86bdd756ca455951"
    ])->get('https://affiliate-api.flipkart.net/affiliate/api/surajjadh1.json');
    $list = Arr::get(collect($response->json())->get('apiGroups'),'affiliate.apiListings');
    foreach ($list as $key => $value) {
        Log::info($key);
        Spatie\Tags\Tag::findOrCreate(str_replace('_',' ',Str::ucfirst($key)),'fk-tags');
    }
});
