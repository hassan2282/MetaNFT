<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\permissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class permissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(permissionRequest $permissionRequest)
    {
       $permission = Permission::create([
           'name' => $permissionRequest->name,
           'percent' => $permissionRequest->percent,
       ]);
       if($permission)
       {
           Alert::success('سطح دسترسی جدید','با موفقیت افزوده شد');
       }
       else{
           Alert::danger('خطا','مشکلی بوجود آمده !!!');
       }

       return back();
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
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $save = $permission->update([
            'name'      => $request->name,
            'percent'   => $request->percent,
        ]);
        if($save){
            Alert::success(' دسترسی','با موفقیت ویرایش شد');
        }else{
            Alert::danger('خطا','مشکلی بوجود آمده !!!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $delete = $permission->delete();
        if($delete){
            Alert::success('سطح دسترسی ','با موفقیت حذف شد');
        }else{
            Alert::danger('خطا','مشکلی بوجود آمده !!!');
        }
        return back();
    }
}
