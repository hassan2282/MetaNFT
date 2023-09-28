@extends('admin.layouts.main')
@section('title','Permissions Page')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small></small>
                <a href="{{route('permissions.create')}}" class="btn btn-block btn-primary col-md-4">افزودن سطح دسترسی جدید</a>
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
                            <th>نام دسترسی</th>
                            <th>میزان دسترسی</th>
                            <th style="width: 40px">درصد</th>
                            <th class="pull-left" style="margin-left:2rem">عملیات</th>
                        </tr>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td>{{$permission->id}}.</td>
                                    <td>{{$permission->name}}</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-primary" style="width: {{$permission->percent}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-red">{{$permission->percent}}%</span></td>

                                        <td class="pull-left">
                                            <div style="display: flex">
                                                <a href="{{route('permissions.edit', $permission)}}" class="btn btn-social-icon btn-warning"><i class="fa fa-edit"></i></a>
                                                <form action="{{route('permissions.destroy', $permission)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-social-icon btn-google"><i class="fa fa-close"></i></button>
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
