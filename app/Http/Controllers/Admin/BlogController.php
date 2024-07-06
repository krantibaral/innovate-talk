<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class BlogController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Blogs';
        $this->resources = 'admin.blogs.';
        $this->route = 'blogs.';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Eager load the category relationship
            $data = Blog::with('category')->orderBy('id', 'DESC')->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('title', function ($row) {
                    return $row->title;
                })
                ->editColumn('description', function ($row) {
                    return Str::limit(strip_tags($row->description), 300, '...');
                })
                // Add a new column for the category name
                ->addColumn('category', function ($row) {
                    return $row->category ? $row->category->name : 'No Category';
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route
                    ])->render();
                })
                ->rawColumns(['action', 'category'])
                ->make(true);
        }

        $info = $this->crudInfo();
        return view($this->indexResource(), $info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (!auth()->user()->can('Blogs.create')) {
        //     abort(403);
        // }

        $info = $this->crudInfo();
        $info['categories'] = Category::pluck('name', 'id');
        return view($this->createResource(), $info);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required|in:free,premium',
            'status' => 'required|in:active,inactive',
            'summary' => 'nullable|string',
        ]);

        $data = $request->all();

        // Only include summary if the type is premium
        if ($data['type'] === 'premium') {
            $data['summary'] = $request->summary;
        } else {
            $data['summary'] = null;
        }

        $data['user_id'] = Auth::id(); // Assign the authenticated user's ID

        $blog = new Blog($data);
        $blog->save();

        if ($request->image) {
            $blog->addMediaFromRequest('image')->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $Blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if (!auth()->user()->can('Blogs.show')) {
        //     abort(403);
        // }
        $info = $this->crudInfo();
        $info['item'] = Blog::with(['user', 'category'])->findOrFail($id); 
        return view($this->showResource(), $info);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $Blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Blog::findOrFail($id);
        $info['categories'] = Category::pluck('name', 'id');

        return view($this->editResource(), $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $Blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required|in:free,premium',
            'status' => 'required|in:active,inactive',
            'summary' => 'nullable|string',
        ]);

        $data = $request->all();
        $item = Blog::findOrFail($id);

        // Only include summary if the type is premium
        if ($data['type'] === 'premium') {
            $data['summary'] = $request->summary;
        } else {
            $data['summary'] = null;
        }

        $data['user_id'] = Auth::id(); // Assign the authenticated user's ID

        $item->update($data);

        if ($request->image) {
            $item->clearMediaCollection();
            $item->addMediaFromRequest('image')->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $Blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (!auth()->user()->can('Blogs.delete')) {
        //     abort(403);
        // }
        try {
            $item = Blog::findOrFail($id);
            $item->clearMediaCollection();
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
}
