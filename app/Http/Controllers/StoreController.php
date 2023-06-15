<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() 
    {
        $featured = Product::where('featured', true)->get()->load(['image', 'category']);
        $design = Design::all()->load('image');
        return view('store.index', [
            'featured' => $featured,
            'collection' => $design,
        ]);
    }
}
