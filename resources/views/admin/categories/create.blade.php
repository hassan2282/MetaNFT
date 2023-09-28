@extends('admin.layouts.main')
@section('title','Category Creation Panel')
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
                <form action="{{route('category.store')}}" method="POST" class="col-md-12">
                    @csrf
                        <div class="form-group has-success col-md-5">
                            <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> نام دسته بندی را وارد کنید</label>
                            <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="نام دسته بندی" required>
                            <button type="submit" class="btn btn-success btn-lg btn-block">Success</button>
                        </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>دسته بندی های والد</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">دسته بندی اصلی</option>
                                    @foreach($category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
