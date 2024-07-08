<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;

use App\Models\Advertise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdvertiseController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->title = 'Advertisement';
        $this->resources = 'admin.advertisements.';
        $this->route = 'advertisements.';
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Eager load the advertise relationship
            $data = Advertise::orderBy('id', 'DESC')->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('title', function ($row) {
                    return $row->title;
                })


                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route
                    ])->render();
                })
                ->rawColumns(['action', 'advertise'])
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
            'title' => 'required',

        ]);

        $data = $request->all();



        $advertise = new Advertise($data);
        $advertise->save();

        if ($request->image) {
            $advertise->addMediaFromRequest('image')->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Advertise::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Advertise::findOrFail($id);
        //        dd($info);
        return view($this->editResource(), $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',

        ]);

        $data = $request->all();
        $item = Advertise::findOrFail($id);



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
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $item = Advertise::findOrFail($id);
            $item->clearMediaCollection();
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
}
