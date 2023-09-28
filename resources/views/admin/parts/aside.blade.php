<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{asset('/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>{{auth()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="جستجو">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="/">
                    <i class="fa fa-home"></i> <span>خانه</span>
                    <span class="pull-left-container">
              <small class="label pull-left bg-green"></small>
            </span>
                </a>
            </li>
            @can('users-access')
                <li>
                    <a href="{{route('users.index')}}">
                        <i class="fa fa-users"></i> <span>کاربران</span>
                        <span class="pull-left-container">
                          <small class="label pull-left bg-green">{{\App\Models\User::count()}}</small>
                        </span>
                    </a>
                </li>
            @endcan
            <li>
                <a href="{{route('posts.index')}}">
                    <i class="fa fa-book"></i> <span>پست ها</span>
                    <span class="pull-left-container">
              <small class="label pull-left bg-green">{{\App\Models\Post::count()}}</small>
            </span>
                </a>
            </li>
            <li>
{{--                {{route('category.index')}}--}}
                <a href="{{route('category.index')}}">
                    <i class="fa fa-tags"></i> <span>دسته بندی ها</span>
                    <span class="pull-left-container">
              <small class="label pull-left bg-green">{{\App\Models\Category::count()}}</small>
            </span>
                </a>
            </li>
            @can('users-access')
            <li>
                <a href="{{route('permissions.index')}}">
                    <i class="fa fa-lock"></i> <span>دسترسی ها</span>
                    <span class="pull-left-container">
              <small class="label pull-left bg-green">{{\App\Models\Permission::count()}}</small>
            </span>
                </a>
            </li>
            <li>
                <a href="{{route('roles.index')}}">
                    <i class="fa fa-key"></i> <span>نقش ها</span>
                    <span class="pull-left-container">
              <small class="label pull-left bg-green">{{\App\Models\Role::count()}}</small>
            </span>
                </a>
            </li>
            @endcan
            <li>
                <a href="{{route('contacts.index')}}">
                    <i class="fa fa-commenting"></i> <span>پیام ها</span>
                    <span class="pull-left-container">
              <small class="label pull-left bg-green">{{\App\Models\Contact::count()}}</small>
            </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
