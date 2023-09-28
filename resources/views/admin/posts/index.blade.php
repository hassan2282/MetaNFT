@extends('admin.layouts.main')
@section('title','افزودن پست جدید | ادمین پنل')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                داشبرد
                <small>کنترل پنل</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('posts.create')}}"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">داشبرد</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{route('posts.create')}}" class="btn col-md-5 btn-default">افزودن پست جدید</a>
                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <form action="" >
                                        <div style="display:flex;margin-left:20%;">
                                        <input type="text" name="search" value="{{request('search')}}" class="form-control pull-right" placeholder="جستجو">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>عنوان</th>
                                        <th>خلاصه</th>
                                        <th>توضیحات</th>
                                        <th>تصویر</th>
                                        <th>عملیات</th>
                                    </tr>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->description}}</td>
                                        <td>{{$post->body}}</td>
                                        <td>
                                            <img class="profile-user-img img-responsive img-circle" src="/{{$post->image_name}}" alt="User profile picture">
                                        </td>
                                        <td>
                                            <div style="display:flex">
                                                <a href="{{route('posts.edit', $post)}}" class="btn btn-app">
                                                    <i class="fa fa-edit"></i> ویرایش
                                                </a>
                                                <form action="{{route('posts.destroy', $post)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-app">
                                                        <i class="fa fa-close"></i>حذف
                                                    </button>

                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$posts->links()}}
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
