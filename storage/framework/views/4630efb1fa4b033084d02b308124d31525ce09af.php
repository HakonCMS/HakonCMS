        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <?php echo Html::Script('core/hakon/js/jquery.min.js'); ?>

        <?php echo Html::Script('core/hakon/js/bootstrap.min.js'); ?>

        <?php echo Html::Script('core/hakon/js/detect.js'); ?>

        <?php echo Html::Script('core/hakon/js/fastclick.js'); ?>

        <?php echo Html::Script('core/hakon/js/jquery.slimscroll.js'); ?>

        <?php echo Html::Script('core/hakon/js/jquery.blockUI.js'); ?>

        <?php echo Html::Script('core/hakon/js/waves.js'); ?>

        <?php echo Html::Script('core/hakon/js/wow.min.js'); ?>

        <?php echo Html::Script('core/hakon/js/jquery.nicescroll.js'); ?>

        <?php echo Html::Script('core/hakon/js/jquery.scrollTo.min.js'); ?>


        <?php echo Html::Script('core/hakon/plugins/peity/jquery.peity.min.js'); ?>


        <!-- jQuery  -->
        <?php echo Html::Script('core/hakon/plugins/waypoints/lib/jquery.waypoints.js'); ?>

        <?php echo Html::Script('core/hakon/plugins/counterup/jquery.counterup.min.js'); ?>




        <?php echo Html::Script('core/hakon/plugins/morris/morris.min.js'); ?>

        <?php echo Html::Script('core/hakon/plugins/raphael/raphael-min.js'); ?>


        <?php echo Html::Script('core/hakon/plugins/jquery-knob/jquery.knob.js'); ?>


        <?php echo Html::Script('core/hakon/pages/jquery.dashboard.js'); ?>


        <?php echo Html::Script('core/hakon/js/jquery.core.js'); ?>

        <?php echo Html::Script('core/hakon/js/jquery.app.js'); ?>


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