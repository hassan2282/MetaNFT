@extends('admin.layouts.main')
@section('title','Contacts Page')
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
                            <h3 class="text-secondary">Users Contacts</h3>
                        <div class="box-header">
                            <form action="" class="col-md-3">
                                <div class="input-group">
                                    <input type="text" name="search" value="{{request('search')}}" class="form-control" placeholder="جستجو">
                                    <span class="input-group-btn">
                                    <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                    </button>
                                  </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>آیدی</th>
                                    <th>نام</th>
                                    <th>ایمیل</th>
                                    <th>عنوان</th>
                                    <th>نقش کاربر</th>
                                    <th>حذف</th>
                                </tr>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->id}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->subject}}</td>
                                        <td>{{$contact->message}}</td>
                                        <td>
                                            <form action="{{route('contacts.destroy', $contact)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger rounded p-1 fa fa-close"></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{$contacts->links()}}
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


