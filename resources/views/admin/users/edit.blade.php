@extends('admin.layouts.main')
@section('title','تغییر اطلاعات کاربر | ادمین پنل')
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
                    <h3 class="box-title">افزودن کاربر جدید</h3>
                    @include('admin.validation.validation')
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{route('users.update', $user)}}">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputName">نام</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="{{$user->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ایمیل</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="{{$user->email}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">رمز عبور</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="رمز عبور" required>
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
