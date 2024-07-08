<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Advertise;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $data['categories'] = Category::all();
        $data['advertisements'] = Advertise::all(); // Fetch all advertisements

        return view('welcome', $data);
    }

    public function blogDetails($slug)
    {
        $data['article'] = Blog::where('slug', $slug)->firstOrFail();
        $data['relatedArticles'] = Blog::where('id', '!=', $data['article']->id)->get();
        // $data['advertisements'] = Advertise::all(); // Fetch all advertisements

        return view('front.blog_details', $data);
    }
}
