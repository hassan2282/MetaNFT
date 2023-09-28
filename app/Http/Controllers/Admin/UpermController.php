<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UpermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $user = User::find($id);
        return view('admin.uperms.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $user = User::find($id);
        $permissions = Permission::all();
        $roles = Role::all();
        return view('admin.uperms.create', compact(['user','permissions','roles','id']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , $id)
    {
        $user = User::find($id);
        $user->role()->sync($request['roles']);
        $user->permission()->sync($request['permissions']);
        Alert::success('success','role successfully added!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user =  User::find($id);
        return view('admin.uperms.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.uperms.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
