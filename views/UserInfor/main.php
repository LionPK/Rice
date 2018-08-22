<body>

     <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <!-- <span class="badge badge-pill badge-success">เข้าสู่ระบบสำเร็จ</span> -->
                  ยินดีต้อนรับผู้ดูแลระบบ
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        
    <!-- <script src="<?php echo URL; ?>Public/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/plugins.js"></script>
    <script src="<?php echo URL; ?>Public/js/main.js"></script>


    <script src="<?php echo URL; ?>Public/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo URL; ?>Public/js/dashboard.js"></script>
    <script src="<?php echo URL; ?>Public/js/widgets.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo URL; ?>Public/js/lib/vector-map/country/jquery.vmap.world.js"></script> -->
     <!--   Core JS Files   -->
    <script src="<?php echo URL; ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="<?php echo URL; ?>/assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo URL; ?>/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo URL; ?>/assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo URL; ?>/assets/demo/demo.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>