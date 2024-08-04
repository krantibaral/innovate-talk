<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class FAQController extends BaseController
{

    public function __construct()
    {
        $this->title = 'FAQ';
        $this->resources = 'admin.faqs.';
        $this->route = 'faqs.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!auth()->user()->can('faqs')) {
            abort(403);
        }
        if ($request->ajax()) {
            $data = FAQ::orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('question', function ($row) {
                    return '<p class="text-dark-75 font-weight-normal d-block font-size-h6">' . '#' . $row->id . ' ' . $row->question . '</p>';
                })
                ->editColumn('answer', function ($row) {
                    return Str::limit(strip_tags($row->answer), 300, '...');
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route
                    ])->render();
                })
                ->rawColumns(['action', 'question'])
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
        if (!auth()->user()->can('faqs.create')) {
            abort(403);
        }
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
            'question' => 'required',
            'answer' => 'required'
        ]);

        $data = $request->all();
        $faq = new FAQ($data);
        $faq->save();

        return redirect()->route($this->indexRoute());
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('faqs.show')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = FAQ::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->can('faqs.edit')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = FAQ::findOrFail($id);
        //        dd($info);
        return view($this->editResource(), $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $data = $request->all();
        $faq = FAQ::findOrFail($id);
        $faq->update($data);

        return redirect()->route($this->indexRoute());
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('faqs.delete')) {
            abort(403);
        }
        try {
            $faq = FAQ::findOrFail($id);
            $faq->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }

}
