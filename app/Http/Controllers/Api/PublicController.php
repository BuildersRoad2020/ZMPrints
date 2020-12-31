<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\ProductCollection;
use App\Http\Requests\ProductRequest;

class PublicController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $products = Product::withCount('category')->withCount('image')->orderBy('created_at', 'DESC')->paginate('12');     
        return new ProductCollection($products);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $category = $product->category;
        $image = $product->image;
        return new ProductResource($product);

    }

 
}
