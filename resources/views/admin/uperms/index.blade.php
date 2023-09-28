@extends('admin.layouts.main')
@section('title','Permissions Page')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small></small>
                 </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">داشبرد</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-12">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-aqua-active">
                        <h3 class="widget-user-username">{{$user->name}}</h3>
                        <h5 class="widget-user-desc">{{$user->email}}</h5>
                        <a href="{{route('Uperm.create', $user->id)}}" class="btn col-md-3 btn-default">تغییر سطح دسترسی</a>

                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle" src="{{$user->avatar}}" alt="User Avatar">
                    </div>
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-6 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">مقام ها</h5>
                                    <hr>
                                    @if($user->role !== null)
                                        @foreach($user->role as $item)
                                            <button class="btn btn-warning description-text ">{{$item->name}}</button>
                                        @endforeach
                                    @else
                                        این کاربر هنوز نقشی ندارد !!!
                                    @endif
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="border-right">
                                <div class="description-block">
                                    <h5 class="description-header">دسترسی های کاربر </h5>
                                    <hr>
                                    @foreach($user->permission as $permission)
                                        <span class="description-text">
                                            <button class="btn btn-info ">{{$permission->name}}</button>
                                        </span>
                                    @endforeach
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
