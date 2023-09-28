<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    @include('admin.parts.style')
    </head>
<body class="hold-transition skin-blue sidebar-mini">
@include('sweetalert::alert')
<div class="wrapper">

    @include('admin.parts.header')

    @include('admin.parts.aside')

    @yield('content')

    @include('admin.parts.footer')

</div>
<!-- ./wrapper -->
    @include('admin.parts.script')
</body>
</html>
