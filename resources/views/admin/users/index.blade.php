@extends('admin.layouts.main')
@section('title','پنل مدیریت کاربران | ادمین پنل')
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
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                                <a href="{{route('users.create')}}" class="btn btn-success fa fa-plus">  افزودن کاربر جدید </a>
                            <div class="box-tools">
                                <div class="input-group input-group-sm">
                                    <form action="" style="display: flex" class="col-md-10">
                                        <input type="text" name="search" value="{{request('search')}}" class="form-control pull-right" placeholder="جستجو">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>آیدی</th>
                                    <th>نام</th>
                                    <th>ایمیل</th>
                                    <th>تاریخ عضویت</th>
                                    <th>نقش کاربر</th>
                                    <th>عملیات</th>
                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>
                                            @if($user->isAdmin == 1)
                                                <span class="label label-success">ادمین</span>
                                            @else
                                                <span>کاربر </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div style="display: flex">
                                                <a href="{{route('users.edit', $user)}}" class="btn btn-app">
                                                    <i class="fa fa-edit"></i> ویرایش
                                                </a>
                                                <form method="POST" action="{{route('users.destroy', $user)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-app">
                                                        <i class="fa fa-close"></i> حذف
                                                    </button>
                                                </form>
                                                @if($user->isVendor == 1 || $user->isAdmin == 1)
                                                    @can('permission-user')
                                                    <a href="{{route('Uperm.index', $user->id)}}" class="btn btn-app">
                                                        <i class="fa fa-unlock"></i> دسترسی ها
                                                    </a>
                                                    @endcan
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{$users->links()}}
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
