<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
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
            'thumbnail' => 'required|image',
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
