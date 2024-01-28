<section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ \Auth::user()->name }}</p>
            <a><i class="fa fa-circle text-success"></i> Online</a>
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

        {{-- Admin Roles --}}
        @if (\Auth::user()->roles === 'admin')
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
                    <li class="{{ Request::is('backend/user/create') ? 'active' : '' }}"><a
                            href="/backend/user/create"><i class="fa fa-circle-o"></i> Buat Member Baru</a></li>
                </ul>
            </li>

            <li class="treeview {{ Request::is('backend/category*') ? 'active' : '' }} ">
                <a href="#">
                    <i class="fa fa-sticky-note"></i> <span>Data Kategori</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('backend/category') ? 'active' : '' }}"><a href="/backend/category"><i
                                class="fa fa-circle-o"></i> List Kategori Lapangan</a></li>
                    <li class="{{ Request::is('backend/category/create') ? 'active' : '' }}"><a
                            href="/backend/category/create"><i class="fa fa-circle-o"></i> Buat Kategori Baru</a></li>
                </ul>
            </li>

            <li class="treeview {{ Request::is('backend/lapangan*') ? 'active' : '' }} ">
                <a href="#">
                    <i class="fa fa-building"></i> <span>Data Lapangan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('backend/lapangan') ? 'active' : '' }}"><a href="/backend/lapangan"><i
                                class="fa fa-circle-o"></i> List Lapangan</a></li>
                    <li class="{{ Request::is('backend/lapangan/create') ? 'active' : '' }}"><a
                            href="/backend/lapangan/create"><i class="fa fa-circle-o"></i> Buat Lapangan Baru</a></li>
                </ul>
            </li>
        @else
            {{-- Member Role --}}
            <li class="header">MEMBER</li>
            <li class="{{ Request::is('/lapangan/*') ? 'active' : '' }}"><a href="/lapangan"><i
                        class="fa fa-circle-o"></i> <span>Lapangan</span></a></li>
            <li class="{{ Request::is('/lapangan/*') ? 'active' : '' }}"><a href="/lapangan"><i
                        class="fa fa-circle-o"></i> <span>Futsal</span></a></li>
            <li class="{{ Request::is('/lapangan/*') ? 'active' : '' }}"><a href="/lapangan"><i
                        class="fa fa-circle-o"></i> <span>Mini Soccer</span></a></li>
            <li class="{{ Request::is('/lapangan/*') ? 'active' : '' }}"><a href="/lapangan"><i
                        class="fa fa-circle-o"></i> <span>Events</span></a></li>
        @endif

    </ul>
</section>
