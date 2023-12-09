<section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>User</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- Sidebar user panel -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li>
            <a href="/backend/dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="header">ADMINISTRATOR</li>
        <li class="treeview {{ Request::is('backend/user*') ? 'active' : '' }} ">
            <a href="#">
                <i class="fa fa-users"></i> <span>Data Member</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('backend/user') ? 'active' : '' }}"><a href="/backend/user"><i
                            class="fa fa-circle-o"></i> List Member</a></li>
                <li class="{{ Request::is('backend/user/create') ? 'active' : '' }}"><a href="/backend/user/create"><i
                            class="fa fa-circle-o"></i> Buat Member Baru</a></li>
            </ul>
        </li>
    </ul>
</section>
