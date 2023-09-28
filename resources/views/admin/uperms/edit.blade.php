@extends('admin.layouts.main')
@section('title','Edit Permissions')
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
            @include('admin.validation.validation')
            <form action="{{route('permissions.update', $permission)}}" method="POST" class="col-md-12">
                @csrf
                @method('PATCH')
                <div class="form-group has-success col-md-5">
                    <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> لطفا نام سطح دسترسی جدید را وارد کنید</label>
                    <input type="text" name="name" class="form-control" value="{{$permission->name}}" id="inputSuccess" placeholder="نام دسترسی" required>
                    <label class="control-label" for="inputPercent"><i class="fa fa-check"></i> میزان دسترسی -> بین 0 تا 100</label>
                    <input type="number" name="percent" min="0" max="100" value="{{$permission->percent}}" class="form-control" id="inputPercent" placeholder="درصد دسترسی" required>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Success</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
