@extends('admin.layouts.main')
@section('title','Categories')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small></small>
                <a href="{{route('category.create')}}" class="btn btn-block btn-primary col-md-4">افزودن دسته بندی جدید</a>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">داشبرد</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <x-category :categories="$categories"/>
        </section>
        <!-- /.content -->
    </div>
@endsection
