@extends('admin.layouts.main')
@section('title','Create Roles')
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
                @if(Session::has('success'))
                    <button class="btn btn-success btn-block text-white rounded p-2">{{Session::get('success')}}</button>
                @endif
                @if(Session::has('error'))
                    <button class="btn btn-danger btn-block text-white rounded p-2">{{Session::get('error')}}</button>
                @endif
            <form action="{{route('roles.store')}}" method="POST" class="col-md-12" style="display: grid">
                @csrf
                <div class="box-body">
                    <div class="form-group has-success col-md-5">
                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> لطفا نقش کاربری را وارد کنید</label>
                        <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="نام نقش" required>
                    </div>
                    <div class="form-group  col-md-6">
                        <label class="control-label" for="select">لطفا سطوح دسترسی هر نقش را انتخاب کنید</label>
                        <select class="js-example-basic-multiple form-control" id="select" name="permissions[]" multiple="multiple" required>
                            @foreach($permissions as $permission)
                                <option value="{{$permission->id}}">{{$permission->name}}</option>
                            @endforeach
                        </select>
                    </div>

                        <div class="form-group col-md-5">
                            <button type="submit" class="btn btn-success form-control">Success</button>
                        </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
