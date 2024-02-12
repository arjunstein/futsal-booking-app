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
                                        <label>Tanggal main:</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right"
                                                data-provide="datepicker" data-date-format="DD, dd-MM-yyyy" data-date-start-date="0d" id="datepicker">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                    <!-- Timepicker -->
                                    <div class="form-group">
                                        <label>Jam main:</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <select class="form-control select2" multiple="multiple">
                                                <option value="06:00 - 07:00">06:00 - 07:00</option>
                                                <option value="07:00 - 08:00">07:00 - 08:00</option>
                                                <option value="09:00 - 10:00">09:00 - 10:00</option>
                                                <option value="10:00 - 11:00">10:00 - 11:00</option>
                                                <option value="11:00 - 12:00">11:00 - 12:00</option>
                                                <option value="12:00 - 13:00">12:00 - 13:00</option>
                                                <option value="13:00 - 14:00">13:00 - 14:00</option>
                                                <option value="14:00 - 15:00">14:00 - 15:00</option>
                                                <option value="15:00 - 16:00">15:00 - 16:00</option>
                                                <option value="16:00 - 17:00">16:00 - 17:00</option>
                                                <option value="17:00 - 18:00">17:00 - 18:00</option>
                                                <option value="18:00 - 19:00">18:00 - 19:00</option>
                                                <option value="19:00 - 20:00">19:00 - 20:00</option>
                                                <option value="20:00 - 21:00">20:00 - 21:00</option>
                                                <option value="21:00 - 22:00">21:00 - 22:00</option>
                                                <option value="22:00 - 23:00">22:00 - 23:00</option>
                                                <option value="23:00 - 00:00">23:00 - 00:00</option>
                                            </select>
                                        </div>
                                        <!-- /.input group -->
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
