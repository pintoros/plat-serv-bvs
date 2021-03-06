        <?php if ( isset( $_REQUEST['action'] ) && $_REQUEST['action'] != 'authentication' ) : ?>
        <!-- footer content -->
        <footer>
          <div>
            <?=$trans->getTrans('menu','FOOTER_MESSAGE')?>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
        <?php endif; ?>
      </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <!-- Custom Theme Scripts -->
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/build/js/custom.js"></script>
    <!-- Translations Scripts -->
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/js/texts.js"></script>
    <!-- Theme Scripts -->
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/js/functions.js"></script>
    <!-- Main Scripts -->
    <script type="text/javascript" src="<?=RELATIVE_PATH?>/js/scripts.js"></script>

    <?php $actions = array( 'menu', 'mydocuments', 'mysearches' ); ?>
    <?php if ( $_SESSION['userTK'] && in_array($_REQUEST['action'], $actions) ) : ?>
    <script type="text/javascript">
        var start;
        var end;
        var time;
        var seconds;

        $(window).on('focus', function(e) {
            if ( start ) {
                // later record end time
                end = new Date().getTime();
                // time difference in ms
                time = end - start;
                // strip the ms
                time /= 1000;
                // get seconds (Original had 'round' which incorrectly counts 0:28, 0:29, 1:30 ... 1:59, 1:0)
                seconds = Math.round(time % 60);
/*
                // remove seconds from the date
                time = Math.floor(time / 60);
                // get minutes
                var minutes = Math.round(time % 60);
                // remove minutes from the date
                time = Math.floor(time / 60);
                // get hours
                var hours = Math.round(time % 24);
                // remove hours from the date
                time = Math.floor(time / 24);
                // the rest of time is number of days
                var days = time ;
*/
                if ( seconds >= 10 ) {
                    window.location.reload();
                }
            }
        }).blur(function(e) {
            // record start time
            start = new Date().getTime();
        });
    </script>
    <?php endif; ?>
  </body>
</html>