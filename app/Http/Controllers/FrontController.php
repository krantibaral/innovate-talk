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

        return view('welcome', $data);
    }

    public function blogDetails($id)
    {
        $data['article'] = Blog::findOrFail($id);
        $data['relatedArticles'] = Blog::where('id', '!=', $data['article']->id)->get();

        return view('front.blog_details', $data);
    }




}
