 <!-- jQuery 3 -->
 <script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- date-range-picker -->
 <script src="/adminlte/bower_components/moment/min/moment.min.js"></script>
 <script src="/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
 <!-- bootstrap datepicker -->
 <script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
 <!-- bootstrap color picker -->
 <script src="/adminlte/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
 <!-- bootstrap time picker -->
 <script src="/adminlte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
 <!-- SlimScroll -->
 <script src="/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
 <script src="/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="/adminlte/dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="/adminlte/dist/js/demo.js"></script>
 <!-- Select2 -->
 <script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
 <!-- InputMask -->
 <script src="/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
 <script src="/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
 <script src="/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
 <!-- iCheck 1.0.1 -->
 <script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
 <script>
     $(function() {
         //Initialize Select2 Elements
         $('.select2').select2()

         //Datemask dd/mm/yyyy
         $('#datemask').inputmask('dd/mm/yyyy', {
             'placeholder': 'dd/mm/yyyy'
         })
         //Datemask2 mm/dd/yyyy
         $('#datemask2').inputmask('mm/dd/yyyy', {
             'placeholder': 'mm/dd/yyyy'
         })
         //Money Euro
         $('[data-mask]').inputmask()

         //Date range picker
         $('#reservation').daterangepicker()
         //Date range picker with time picker
         $('#reservationtime').daterangepicker({
             timePicker: true,
             timePickerIncrement: 30,
             format: 'MM/DD/YYYY h:mm A'
         })
         //Date range as a button
         $('#daterange-btn').daterangepicker({
                 ranges: {
                     'Today': [moment(), moment()],
                     'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                     'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                     'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                     'This Month': [moment().startOf('month'), moment().endOf('month')],
                     'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                         'month').endOf('month')]
                 },
                 startDate: moment().subtract(29, 'days'),
                 endDate: moment()
             },
             function(start, end) {
                 $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                     'MMMM D, YYYY'))
             }
         )

         //Date picker
         $('#datepicker').datepicker({
             autoclose: true
         })

         //iCheck for checkbox and radio inputs
         $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
             checkboxClass: 'icheckbox_minimal-blue',
             radioClass: 'iradio_minimal-blue'
         })
         //Red color scheme for iCheck
         $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
             checkboxClass: 'icheckbox_minimal-red',
             radioClass: 'iradio_minimal-red'
         })
         //Flat red color scheme for iCheck
         $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
             checkboxClass: 'icheckbox_flat-green',
             radioClass: 'iradio_flat-green'
         })

         //Colorpicker
         $('.my-colorpicker1').colorpicker()
         //color picker with addon
         $('.my-colorpicker2').colorpicker()

         //Timepicker
         $('.timepicker').timepicker({
             showInputs: false
         })
     })
 </script>
 <script>
     // Mendapatkan waktu saat ini
     var currentTime = new Date();
     var currentHour = currentTime.getHours();

     // Menonaktifkan opsi jam yang sudah lewat
     $('select[name="jam_main[]"] option').each(function() {
         var optionHour = parseInt($(this).val().split(':')[0], 10);
         if (optionHour < currentHour) {
             $(this).prop('disabled', true);
         }
     });
 </script>
