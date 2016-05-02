        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        {!! Html::Script('core/hakon/js/jquery.min.js') !!}
        {!! Html::Script('core/hakon/js/bootstrap.min.js') !!}
        {!! Html::Script('core/hakon/js/detect.js') !!}
        {!! Html::Script('core/hakon/js/fastclick.js') !!}
        {!! Html::Script('core/hakon/js/jquery.slimscroll.js') !!}
        {!! Html::Script('core/hakon/js/jquery.blockUI.js') !!}
        {!! Html::Script('core/hakon/js/waves.js') !!}
        {!! Html::Script('core/hakon/js/wow.min.js') !!}
        {!! Html::Script('core/hakon/js/jquery.nicescroll.js') !!}
        {!! Html::Script('core/hakon/js/jquery.scrollTo.min.js') !!}

        {!! Html::Script('core/hakon/plugins/peity/jquery.peity.min.js') !!}

        <!-- jQuery  -->
        {!! Html::Script('core/hakon/plugins/waypoints/lib/jquery.waypoints.js') !!}
        {!! Html::Script('core/hakon/plugins/counterup/jquery.counterup.min.js') !!}



        {!! Html::Script('core/hakon/plugins/morris/morris.min.js') !!}
        {!! Html::Script('core/hakon/plugins/raphael/raphael-min.js') !!}

        {!! Html::Script('core/hakon/plugins/jquery-knob/jquery.knob.js') !!}

        {!! Html::Script('core/hakon/pages/jquery.dashboard.js') !!}

        {!! Html::Script('core/hakon/js/jquery.core.js') !!}
        {!! Html::Script('core/hakon/js/jquery.app.js') !!}

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>

    </body>
</html>