<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $data['categories'] = Category::all();

        return view('welcome', $data);
    }


    public function blogDetails($slug)
    {
        $data['article'] = Blog::where('slug', $slug)->firstOrFail();
        $data['relatedArticles'] = Blog::where('id', '!=', $data['article']->id)->get();

        return view('front.blog_details', $data);
    }





}
