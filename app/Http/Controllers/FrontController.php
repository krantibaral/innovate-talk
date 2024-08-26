<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Advertise;
use App\Models\FAQ;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

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
        $data['categories'] = Category::all();
        $data['comments'] = Comment::where('blog_id', $data['article']->id)->get();

        // Update the read_at field for the blog
        $data['article']->read_at = now();
        $data['article']->save();
        // Fetch FAQs related to this blog
        $data['faqs'] = FAQ::where('blog_id', $data['article']->id)->get();
        // Fetch recently viewed blogs
        $data['recentlyViewedBlogs'] = Blog::whereNotNull('read_at')
            ->orderBy('read_at', 'desc')
            ->limit(4)
            ->get();

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

    public function about()
    {
        $categories = Category::all();
        return view('front.about', ['categories' => $categories]);
    }




    public function faq()
    {
        $categories = Category::all();
        return view('front.faq', ['categories' => $categories]);
    }

    //contact form submission 
    public function sendEmail(Request $request)
    {
        try {
            $request->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);

            $formData = [
                'name' => $request->input('firstName') . ' ' . $request->input('lastName'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
            ];

            // Send mail to email address
            Mail::to('timilsinasandesh141@gmail.com')->send(new ContactFormMail($formData));

            // Flash success message
            $request->session()->flash('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'An error occurred while sending the message.');
            \Log::error($e);
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function categoryDetails($slug)
    {
        // Fetch the category based on the slug
        $category = Category::where('slug', $slug)->firstOrFail();
        $allCategories = Category::all();

        // Fetch blogs associated with this category
        $blogs = Blog::where('category_id', $category->id)->get();

        // Fetch all advertisements
        $advertisements = Advertise::all();

        // Fetch recently viewed blogs
        $recentlyViewedBlogs = Blog::whereNotNull('read_at')
            ->orderBy('read_at', 'desc')
            ->limit(4)
            ->get();

        // Prepare data to pass to the view
        $data = [
            'categories' => $allCategories,
            'category' => $category,
            'blogs' => $blogs,
            'advertisements' => $advertisements,
            'recentlyViewedBlogs' => $recentlyViewedBlogs,
        ];

        // Return the view with the data
        return view('front.category', $data);
    }



}
