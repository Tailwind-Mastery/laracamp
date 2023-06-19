<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function show($categorySlug, $productSlug)
    {
        
        $product = Product::where('slug', $productSlug)->first()->load(['image', 'user', 'user.image', 'category', 'category.group', 'reviews', 'reviews.user', 'reviews.user.image']);
        
        $allProducts = Category::where('slug', $categorySlug)->first()->load('products.image', 'products');

        return view('product.show', [
            'categorySlug' => $categorySlug,
            'product' => $product,
            'allProducts' => $allProducts
        ]);
    }
    public function create()
    {
        return view('product.create');
    }

    public function store()
    {

        $data = Arr::whereNotNull(request()->all());
        
        $validator = Validator::make($data, [
            'title' => 'required',
            'slug' => 'required|unique:products,slug',
            'price' => 'required|numeric',
            'thumbnail' => 'filled|image',
            'image-1' => 'filled|image',
            'image-2' => 'filled|image',
            'image-3' => 'filled|image',
            'image-4' => 'filled|image',
        ]);
 
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $res = $validator->validated();
        
        $product = new Product();
        $product->user_id = 1;
        $product->title = $res['title'];
        $product->slug = $res['slug'];
        $product->price = $res['price'];
        $product->save();
                
        return to_route('productPage');
    }

}
