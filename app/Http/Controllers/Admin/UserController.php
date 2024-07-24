<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Users';
        $this->resources = 'admin.users.';
        $this->route = 'users.';
    }

    public function index(Request $request)
    {
        // if (!auth()->user()->can('users')) {
        //     abort(403);
        // }
        if ($request->ajax()) {
            $query = User::query();

            $query->where('id', '!=', auth()->user()->id);

            $data = $query->orderBy('id', 'DESC')->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return '<p class="text-dark-75 font-weight-normal d-block font-size-h6">' . '#' . $row->id . ' ' . $row->name . '</p>';
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
        // if (!auth()->user()->can('users.create')) {
        //     abort(403);
        // }

        $info = $this->crudInfo();
        return view($this->createResource(), $info);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = new User($data);
        $user->save();

        // Assign the 'staff' role to the newly created user
        // $user->assignRole('staff');

        // if($request->image){
        //     $user->addMediaFromRequest('image')
        //         ->toMediaCollection();
        // }

        return redirect()->route($this->indexRoute());
    }

    public function show($id)
    {
        // if (!auth()->user()->can('users.show')) {
        //     abort(403);
        // }
        $info = $this->crudInfo();
        $info['item'] = User::findOrFail($id);
        return view($this->showResource(), $info);
    }


    public function edit($id)
    {
        // if (!auth()->user()->can('users.edit')) {
        //     abort(403);
        // }

        $info = $this->crudInfo();
        $info['item'] = User::findOrFail($id);
        return view($this->editResource(), $info);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->all();
        // if (isset($data['password'])) {
        //     $data['password'] = Hash::make($data['password']);
        // }

        $item = User::findOrFail($id);
        $item->update($data);

        return redirect()->route($this->indexRoute());
    }

    public function destroy($id)
    {
        // if (!auth()->user()->can('users.delete')) {
        //     abort(403);
        // }
        try {
            $item = User::findOrFail($id);
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
    //profile of the logged in user
    public function profile()
    {
        $user = auth()->user();
        $info = $this->crudInfo();
        $info['item'] = $user;
        return view($this->showResource(), $info);
    }



}
