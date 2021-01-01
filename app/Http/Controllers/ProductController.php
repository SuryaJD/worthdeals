<?php

namespace App\Http\Controllers;

use App\Jobs\Flipkart\Fetch\Products;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->load(['stores']);
        return view('products.single',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function share(Product $product)
    {
        return response($product);
    }

    public function category($category)
    {
        if ($category == 'electronics') {
            $products = Product::withAnyTags(['laptops'])->limit(100)->get();
            return view('products.category',compact('products'));
        }elseif ($category == 'mobiles') {
            $products = Product::withAnyTags(['mobiles'])->limit(100)->get();
            return view('products.category',compact('products'));
        }elseif ($category == 'food_nutrition') {
            $products = Product::withAnyTags(['food_nutrition'])->limit(100)->get();
            return view('products.category',compact('products'));
        }elseif ($category == 'furniture') {
            $products = Product::withAnyTags(['furniture'])->limit(100)->get();
            return view('products.category',compact('products'));
        }elseif ($category == 'toys') {
            $products = Product::withAnyTags(['toys'])->limit(100)->get();
            return view('products.category',compact('products'));
        }elseif ($category ==  'mens_clothing') {
            $products = Product::withAnyTags(['mens_clothing'])->limit(100)->get();
            return view('products.category',compact('products'));
        }
        
    }
}
