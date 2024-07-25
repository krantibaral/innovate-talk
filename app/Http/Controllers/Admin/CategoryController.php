<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class CategoryController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Categories';
        $this->resources = 'admin.categories.';
        $this->route = 'categories.';
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::orderBy('id', 'DESC')->select(['id', 'name'])->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return e($row->name); // Escape the output
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route
                    ])->render();
                })
                ->rawColumns(['action', 'name'])
                ->make(true);
        }

        $info = $this->crudInfo();
        return view($this->indexResource(), $info);
    }

    public function create()
    {
        $info = $this->crudInfo();
        return view($this->createResource(), $info);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $data = $request->only(['name']);

        $category = Category::create($data);

        if ($request->hasFile('image')) {
            $category->addMediaFromRequest('image')->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    public function show($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Category::select('id', 'name')->findOrFail($id);
        return view($this->showResource(), $info);
    }

    public function edit($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Category::select('id', 'name')->findOrFail($id);
        return view($this->editResource(), $info);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $data = $request->only(['name']);
        $item = Category::findOrFail($id);
        $item->update($data);

        if ($request->hasFile('image')) {
            $item->clearMediaCollection();
            $item->addMediaFromRequest('image')->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    public function destroy($id)
    {
        try {
            $item = Category::findOrFail($id);
            $item->clearMediaCollection();
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())->withErrors(['msg' => 'Error deleting category']);
        }

        return redirect()->route($this->indexRoute());
    }
}
