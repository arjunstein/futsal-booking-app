<div class="container">
    <div class="navbar-header">
        <a href="/" class="navbar-brand"><b>Futsal</b>APP</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
        </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
            @if (Route::has('login'))
                @auth
                    @if (\Auth::user()->roles == 'admin')
                        <li><a href="/backend/lapangan">Lapangan</a></li>
                        <li><a href="/backend/futsal">Futsal</a></li>
                        <li><a href="/backend/mini_soccer">Mini Soccer</a></li>
                        <li><a href="/backend/events">Events</a></li>
                    @else
                        <li><a href="/lapangan">Lapangan</a></li>
                        <li><a href="/futsal">Futsal</a></li>
                        <li><a href="/mini_soccer">Mini Soccer</a></li>
                        <li><a href="/events">Events</a></li>
                    @endif
                @else
                    <li><a href="/lapangan">Lapangan</a></li>
                    <li><a href="/futsal">Futsal</a></li>
                    <li><a href="/mini_soccer">Mini Soccer</a></li>
                    <li><a href="/events">Events</a></li>
                @endauth
            @endif
        </ul>
    </div>
    <!-- /.navbar-collapse -->
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            @if (Route::has('login'))
                @auth
                    @if (\Auth::user()->roles === 'admin')
                        <li><a href="/backend/dashboard">Home</a></li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{ \Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">

                                    <p>
                                        {{ \Auth::user()->name }}
                                        <small>{{ \Auth::user()->roles }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat menu-sidebar">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a onclick="event.preventDefault();document.getElementById('logout-form').submit()"
                                            class="btn btn-default btn-flat menu-sidebar">Sign out</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="/dashboard">Home</a></li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{ \Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">

                                    <p>
                                        {{ \Auth::user()->name }}
                                        <small>{{ \Auth::user()->roles }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat menu-sidebar">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a onclick="event.preventDefault();document.getElementById('logout-form').submit()"
                                            class="btn btn-default btn-flat menu-sidebar">Sign out</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    @endif
                @else
                    <li><a href="/login">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="/register">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </div>
    <!-- /.navbar-custom-menu -->
</div>
<!-- /.container-fluid -->
