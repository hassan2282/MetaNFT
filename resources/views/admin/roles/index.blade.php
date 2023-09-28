@extends('admin.layouts.main')
@section('title','Permissions Page')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small></small>
                <a href="{{route('roles.create')}}" class="btn btn-block btn-danger col-md-4">افزودن نقش کاربری جدید</a>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">داشبرد</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">جدول سطوح دسترسی کاربران</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-hover table-condensed">
                        <tbody><tr>
                            <th style="width: 10px">#</th>
                            <th>مقام ها</th>
                            <th>نقش ها</th>
                            <th>عملیات</th>
                        </tr>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}.</td>
                                    <td>{{$role->name}}</td>
                                    <td>
                                                @if($role->permission() !== null)
                                                    @foreach($role->permission as $item)
                                                        <button class="btn btn-primary rounded p-2">{{$item->name}}</button>
                                                    @endforeach
                                                @endif
                                    </td>
                                    <td>
                                            <div>
                                                <a href="{{route('roles.edit', $role)}}" class="btn btn-warning col-md-10">ادیت<i class="fa fa-edit"></i></a>
                                                <form action="{{route('roles.destroy', $role)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger col-md-10"><i class="fa fa-close">حذف</i></button>
                                                </form>
                                            </div>
                                    </td>
                                 </tr>
                            @endforeach

                        </tbody></table>
                </div>
                <!-- /.box-body -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
