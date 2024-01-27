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
                    @foreach ($lapangan as $lp)
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ asset('storage/lapangans/'.$lp->gambar) }}" alt="...">
                                    <div class="caption">
                                        <h3>{{ $lp->nama_lapangan }}</h3>
                                        <p>Malam : Rp. {{ number_format($lp->harga_sewa_malam) }}/Jam</p>
                                        <p>Siang : Rp. {{ number_format($lp->harga_sewa_siang) }}/Jam</p>
                                        <p>{{ $lp->deskripsi }}</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Booking</a> <a
                                                href="#" class="btn btn-default" role="button">Button</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

    <!-- jQuery 3 -->
    <script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/adminlte/dist/js/demo.js"></script>
</body>

</html>
