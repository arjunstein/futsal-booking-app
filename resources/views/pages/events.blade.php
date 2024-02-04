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
                        Events di Futsal App
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="../img/user.png" alt="...">
                                    <div class="caption">
                                        <h3>Ramadhan Cup 2024</h3>
                                        <p>Berhadiah 1jt</p>
                                        <p>Segera daftar Tim Kalian</p>
                                        <p>Hub 087xxxxxxxxx</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Daftar</a> <a
                                                href="#" class="btn btn-success" role="button">Lihat Detail</a></p>
                                    </div>
                                </div>
                            </div>
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
