@extends('admin.layouts.main')
@section('title','افزودن مقاله جدید | ادمین پنل')
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
                    <h3 class="box-title">افزودن مقاله جدید</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputTitle">عنوان</label>
                            <input type="text" class="form-control" name="title" id="exampleInputTitle" placeholder="عنوان" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDescription">خلاصه</label>
                            <input type="text" class="form-control" name="description" id="exampleInputDescription" placeholder="خلاصه" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBody">توضیحات</label>
                            <input type="text" name="body" class="form-control" id="exampleInputBody" placeholder="توضیحات" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">ارسال فایل</label>
                            <input type="file" name="image" id="exampleInputFile" required>

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
