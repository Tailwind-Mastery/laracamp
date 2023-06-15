<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $search = request()->get('search');

        $categories = Category::where('title', 'like', "%$search%")->get()->load('image');

        return view('category.index', [
            'categories' => $categories,
            'category_count' => $categories->count(),
        ]);
    }

    public function show($slug)
    {
        $search = request()->get('search');
        $category = Category::where('slug', $slug)->first();
        $products = Product::where([
            ['category_id',$category->id],
            ['title', 'like', "%$search%"]
        ])->get()->load(['image', 'category']);

        return view('category.show', [
            'category' => $category,
            'products' => $products,
            'products_count' => $products->count(),
        ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'title' => 'required',
            'slug' => 'required|unique:categories,slug',
            'description' => 'required',
            'thumbnail' => 'required|image',
        ]);
 
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $res = $validator->validated();

        $mime = $res['thumbnail']->extension();
        $nameFile = $res['slug'].'.'.$mime;
        $pathFile = 'public/category/';

        if(!Storage::putFileAs($pathFile, $res['thumbnail'], $nameFile)){
            return redirect()
                ->back()
                ->withErrors([
                    "image" => [
                        "Image failed to upload"
                    ]
                ])
                ->withInput();
        }
        
        $category = new Category();
        $category->title = $res['title'];
        $category->slug = $res['slug'];
        $category->description = $res['description'];
        $category->save();
        
        $image = new Image();
        $image->title = $nameFile;
        $image->path = $nameFile;
        $image->category_id = $category->id;
        $image->size = Storage::size($pathFile.$nameFile);
        $image->mimetype = Storage::mimeType($pathFile.$nameFile);
        $image->mime = $mime;
        $image->save();

        return to_route('createCategory');
    }
}
