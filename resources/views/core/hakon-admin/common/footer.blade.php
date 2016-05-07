<!-- jQuery 2.1.4 -->
{!! Html::Script('core/plugins/jQuery/jQuery-2.1.4.min.js') !!}
        <!-- Bootstrap 3.3.5 -->
{!! Html::Script('core/bootstrap/js/bootstrap.min.js') !!}
        <!-- iCheck -->
{!! Html::Script('core/plugins/iCheck/icheck.min.js') !!}
        <!-- FastClick -->
{!! Html::Script('core/plugins/fastclick/fastclick.min.js') !!}
        <!-- AdminLTE App -->
{!! Html::Script('core/dist/js/app.min.js') !!}
        <!-- Sparkline -->
{!! Html::Script('core/plugins/sparkline/jquery.sparkline.min.js') !!}
        <!-- jvectormap -->
{!! Html::Script('core/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
{!! Html::Script('core/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
        <!-- SlimScroll 1.3.0 -->
{!! Html::Script('core/plugins/slimScroll/jquery.slimscroll.min.js') !!}
        <!-- ChartJS 1.0.1 -->
{!! Html::Script('core/plugins/chartjs/Chart.min.js') !!}
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!! Html::Script('core/dist/js/pages/dashboard2.js') !!}
        <!-- AdminLTE for demo purposes -->
{!! Html::Script('core/dist/js/demo.js') !!}

<script type="text/javascript">
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>