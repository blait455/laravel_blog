<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Auth::user()->gravatar() }}" class="img-circle" alt="{{ Auth::user()->name }}">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin.home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Post</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('article.index') }}"><i class="fa fa-list"></i> All Posts</a></li>
                    <li><a href="{{ route('article.create') }}"><i class="fa fa-pencil-square"></i> Add New</a></li>
                    <li><a href="{{ route('article.index') }}?status=trash"><i class="fa fa-trash"></i> Trash</a></li>
                    <li><a href="{{ route('article.index') }}?status=published"><i class="fa fa-book"></i> Published</a></li>
                    <li><a href="{{ route('article.index') }}?status=scheduled"><i class="fa fa-anchor"></i> Scheduled</a></li>
                    <li><a href="{{ route('article.index') }}?status=draft"><i class="fa fa-dropbox"></i> Draft</a></li>
                    <li><a href="{{ route('article.index') }}?status=featured"><i class="fa fa-star"></i> Featured</a></li>
                </ul>
            </li>
            <li><a href="{{ route('category.index') }}"><i class="fa fa-life-buoy"></i> <span>Categories</span></a></li>

            <li><a href="{{ route('seo.index') }}"><i class="fa fa-life-buoy"></i> <span>Frontend SEO</span></a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Manage Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('user.index') }}"><i class="fa fa-list"></i> Users List</a></li>
                    <li><a href="{{ route('user.create') }}"><i class="fa fa-user-plus"></i> Create User</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>