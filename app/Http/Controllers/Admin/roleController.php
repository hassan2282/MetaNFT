<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class roleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles',
        ]);
        $role = Role::create([
           'name' => $request->name,
        ]);
        $save = $role->permission()->sync($request['permissions']);
        if($save)
        {
            return back()->with('success','New Role Successfully Added');
        }else{
            return back()->with('error','something went wrong!!!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $role->update([
            'name' => $request->name,
        ]);
        $save = $role->permission()->sync($request['permissions']);
        if($save)
        {
            Alert::success('success','the role edited successfully');
        }else{
            Alert::error('error','something went wrong');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $delete = $role->delete();
        if($delete){
            Alert::success('success','Role Deleted');
        }
        else{
            Alert::error('error','something went wrong!');
        }
        return back();
    }
}
