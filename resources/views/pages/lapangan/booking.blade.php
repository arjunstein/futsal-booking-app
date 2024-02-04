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
                <section class="content-header" style="text-align: center">
                    <h1>
                        Booking lapangan sekarang
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <img src="{{ asset('storage/lapangans/' . $lapangan->gambar) }}" alt="...">
                                <div class="caption">
                                    <h3>{{ $lapangan->nama_lapangan }}</h3>
                                    <p>Malam : Rp. {{ number_format($lapangan->harga_sewa_malam) }}/Jam</p>
                                    <p>Siang : Rp. {{ number_format($lapangan->harga_sewa_siang) }}/Jam</p>
                                    <p>{{ $lapangan->deskripsi }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Pilih Jadwal</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date -->
                                    <div class="form-group">
                                        <label>Date:</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="datepicker">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Date range:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservation">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Date and time range:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservationtime">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Date range button:</label>

                                        <div class="input-group">
                                            <button type="button" class="btn btn-default pull-right"
                                                id="daterange-btn">
                                                <span>
                                                    <i class="fa fa-calendar"></i> Date range picker
                                                </span>
                                                <i class="fa fa-caret-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.form group -->

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

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
