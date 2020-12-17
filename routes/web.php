<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
    return view('layouts.main');
});


Route::get('p/{product:slug}',[ProductController::class, 'share'])->middleware('affiliate');

Route::get('flipkart/feeds',function(){
    $response = Http::withHeaders([
        "Fk-Affiliate-Id" => "Surajjadh1",
        "Fk-Affiliate-Token"=> "cca2e3d7f8d1403d86bdd756ca455951"
    ])->get('https://affiliate-api.flipkart.net/affiliate/api/surajjadh1.json');
    // dd($list);
    $list = Arr::get(collect($response->json())->get('apiGroups'),'affiliate.apiListings');

    foreach ($list as $key => $value) {
        Log::info($key);
        Log::info(collect(Arr::get($value,'availableVariants'))->get('v1.1.0')['get']);
    }
});
