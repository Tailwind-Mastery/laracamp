<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        
        return view('search.index', [
            'categories' => $categories
        ]);
    }
}
