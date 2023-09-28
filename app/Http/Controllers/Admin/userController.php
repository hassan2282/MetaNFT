<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:users-access')->only('create');
        $this->middleware('can:users-access')->only('destroy');
        $this->middleware('can:users-access')->only('edit');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query();
        if($key = \request('search')){
          $users->where('id' , 'LIKE' , "%{$key}%")
              ->orWhere('name','LIKE', "%{$key}%")
              ->orWhere('email','LIKE',"%{$key}%");
    }
        $users = $users->latest()->paginate();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        if ($user->save()){
            Alert::success('کاربر جدید','با موفقیت افزوده شد');
            return back();
        }
        else {
            Alert::error('خطا','مشکلی بوجود آمده است');
            return back();
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
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $update = $user->update([
           'name' => $request->name,
           'email' => $request->email,
           'password' => bcrypt($request->password),
        ]);
        if ($update){
            Alert::success('کاربر','با موفقیت ویرایش شد');
        }else {
            Alert::danger('خطا','عملیات با مشکل مواجه شد');
        }
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        Alert::success('حذف کاربر','با موفقیت انجام شد');
        return back();
    }
}
