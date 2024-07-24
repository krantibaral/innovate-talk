<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Advertise;
use App\Models\Comment;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // Fetch the most recent blog post
        $data['latestBlog'] = Blog::orderBy('created_at', 'desc')
            ->first(); // Get the latest one
        $data['blogs'] = Blog::orderBy('created_at', 'desc')
            ->skip(1) // Skip the first (latest) blog post
            ->take(3) // Take the next 3 blog posts
            ->get();



        $data['categories'] = Category::all();

        $data['advertisements'] = Advertise::all(); // Fetch all advertisements
        // Fetch recently viewed blogs
        $data['recentlyViewedBlogs'] = Blog::whereNotNull('read_at')
            ->orderBy('read_at', 'desc')
            ->limit(4)
            ->get();

        return view('welcome', $data);
    }

    public function blogDetails($slug)
    {
        $data['article'] = Blog::where('slug', $slug)->firstOrFail();
        $data['relatedArticles'] = Blog::where('id', '!=', $data['article']->id)->get();
        $data['advertisements'] = Advertise::all(); // Fetch all advertisements

        // Fetch all categories but will be limited in the view
        $data['categories'] = Category::all();

        $data['comments'] = Comment::where('blog_id', $data['article']->id)->get();

        // Update the read_at field for the blog
        $data['article']->read_at = now();
        $data['article']->save();

        return view('front.blog_details', $data);
    }

    public function postComment(Request $request, $blogId)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        // Create the comment
        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->text = $request->input('text');
        $comment->blog_id = $blogId; // Assuming comments are associated with blogs

        $comment->save();

        return redirect()->back()->with('success', 'Comment posted successfully.');
    }
}
