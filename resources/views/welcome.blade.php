<!DOCTYPE html>
<html>

<head>

    @include('layouts.head-welcome')

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">

                @include('layouts.navbar-welcome')

            </nav>
        </header>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Selamat Datang di Futsal App
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        @foreach ($lapangan as $lp)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ asset('storage/lapangans/' . $lp->gambar) }}" alt="...">
                                    <div class="caption">
                                        <h3>{{ $lp->nama_lapangan }}</h3>
                                        <p>Malam : Rp. {{ number_format($lp->harga_sewa_malam) }}/Jam</p>
                                        <p>Siang : Rp. {{ number_format($lp->harga_sewa_siang) }}/Jam</p>
                                        <p>{{ $lp->deskripsi }}</p>
                                        <p><a href="{{ url('/lapangan/'.$lp->id.'/booking') }}" class="btn btn-primary" role="button">Booking</a>
                                            <a href="{{ url('/lapangan/' . $lp->id) }}" class="btn btn-success"
                                                role="button">Lihat Detail</a>

                                            @if (Route::has('login'))
                                                @auth
                                                    @if (\Auth::user()->roles == 'admin')
                                                        <a href="{{ url('backend/lapangan/' . $lp->id.'/edit') }}" class="btn btn-warning"
                                                            role="button">Edit Lapangan</a>
                                                    @endif
                                                @endauth
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            @include('layouts.footer-welcome')
        </footer>
    </div>
    <!-- ./wrapper -->

    @include('layouts.script-welcome')

</body>

</html>
