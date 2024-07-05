<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return $row->name;
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
        return view($this->indexResource(), $info); // This should return a view response
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {

        // if (!auth()->user()->can('Categorys.create')) {
        //     abort(403);
        // }

        $info = $this->crudInfo();
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
            'name' => 'required',

        ]);

        $data = $request->all();



        $Category = new Category($data);
        $Category->save();



        return redirect()->route($this->indexRoute());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if (!auth()->user()->can('Categorys.show')) {
        //     abort(403);
        // }
        $info = $this->crudInfo();
        $info['item'] = Category::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if (!auth()->user()->can('Categorys.edit')) {
        //     abort(403);
        // }
        $info = $this->crudInfo();
        $info['item'] = Category::findOrFail($id);
        //        dd($info);
        return view($this->editResource(), $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $data = $request->all();
        $item = Category::findOrFail($id);



        $item->update($data);



        return redirect()->route($this->indexRoute());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (!auth()->user()->can('Categorys.delete')) {
        //     abort(403);
        // }
        try {
            $item = Category::findOrFail($id);
            $item->clearMediaCollection();
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
}