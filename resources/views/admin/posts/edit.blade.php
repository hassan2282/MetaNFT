@extends('admin.layouts.main')
@section('title',' تغییر مقاله | ادمین پنل')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                داشبرد
                <small>کنترل پنل</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">داشبرد</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">تغییر مقاله</h3>
                    @include('admin.validation.validation')
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('posts.update', $post)}}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputTitle">عنوان</label>
                            <input type="text" class="form-control" name="title" id="exampleInputTitle" value="{{$post->title}}" placeholder="عنوان مقاله" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDescription">خلاصه</label>
                            <input type="text" class="form-control" name="description" id="exampleInputDescription" value="{{$post->description}}" placeholder="دیسکریپشن" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBody">توضیحات</label>
                            <input type="text" name="body" class="form-control" id="exampleInputBody" value="{{$post->body}}" placeholder="متن" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">ارسال فایل</label>
                            <input type="file" name="image" id="exampleInputFile">

                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> مرا به خاطر بسپار
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
