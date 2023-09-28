<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\returnArgument;

class postController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:posts-access')->only('create');
        $this->middleware('can:posts-access')->only('edit');
        $this->middleware('can:posts-access')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query();
        if($key = \request('search'))
        {
            $posts->where('title','LIKE',"%{$key}%")
                ->orWhere('description','LIKE',"%{$key}%")
                ->orWhere('body','LIKE',"%{$key}%");
        }
            $posts = $posts->latest()->paginate();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image_name = time().'.'. $request->image->extension();
        $image_path = $request->image->move('p_pics', $image_name);

        $post = New Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->body = $request->body;
        $post->image_name= $image_path;
        $store = $post->save();
        if($store){
            Alert::success('پست جدید','با موفقیت افزوده شد');
        }else{
            Alert::error('خطا','عملیات با مشکلی مواجه شد');
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
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if($request->image == null){
            $post->update([
                'title' => $request->title,
                'description' => $request->description,
                'body' => $request->body,
            ]);
        }else{
            $image_name = time() .'.'. $request->image->extension();
            $image_path = $request->image->move('p_pics', $image_name);
            $post->update([
                'title' => $request->title,
                'description' => $request->description,
                'body' => $request->body,
                'image_name' => $image_path,
            ]);
        }
        Alert::success('پست شما','با موفقیت تغییر یافت');
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Alert::success('حذف پست','با موفقیت انجام شد');
        return redirect('/admin/posts');
    }
}
