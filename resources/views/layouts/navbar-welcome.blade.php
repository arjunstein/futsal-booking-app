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
                    <li><a href="/backend/dashboard">Home</a></li>
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
