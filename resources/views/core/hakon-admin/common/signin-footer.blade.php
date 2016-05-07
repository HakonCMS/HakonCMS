<!-- jQuery 2.1.4 -->
{!! Html::Script('core/plugins/jQuery/jQuery-2.1.4.min.js') !!}
        <!-- Bootstrap 3.3.5 -->
{!! Html::Script('core/bootstrap/js/bootstrap.min.js') !!}
        <!-- iCheck -->
{!! Html::Script('core/plugins/iCheck/icheck.min.js') !!}
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