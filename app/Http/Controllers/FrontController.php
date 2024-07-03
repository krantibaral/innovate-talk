<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // Assuming the category name 'News' exists in your categories table
        $newsCategoryId = Category::where('name', 'News')->first()->id;
        $data['blogs'] = Blog::where('category_id', $newsCategoryId)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('welcome', $data);
    }
}
