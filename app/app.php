<?php
  $c = ($_GET['content']);
  if (!c || $c == '' || !isset($c) || empty($c)) {
    $c = 'dashboard';
  }

  if (!file_exists('content/'.$c.'.php')) $c = 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Angle - Bootstrap Admin Template</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="../vendor/animate.css/animate.min.css">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="../vendor/whirl/dist/whirl.css">
   <!-- MODERNIZR-->
   <script src="../vendor/modernizr/modernizr.custom.js"></script>
   <!-- MATCHMEDIA POLYFILL-->
   <script src="../vendor/matchMedia/matchMedia.js"></script>
   <!-- JQUERY-->
   <script src="../vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="../vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="../vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- JQUERY EASING-->
   <script src="../vendor/jquery.easing/js/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="../vendor/animo.js/animo.js"></script>
   <!-- SLIMSCROLL-->
   <script src="../vendor/slimScroll/jquery.slimscroll.min.js"></script>
   <!-- SCREENFULL-->
   <script src="../vendor/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   <script src="../vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
   <!-- RTL demo-->
   <script src="js/demo/demo-rtl.js"></script>
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- WEATHER ICONS-->
   <link rel="stylesheet" href="../vendor/weather-icons/css/weather-icons.min.css">
   <!-- TAGS INPUT-->
   <link rel="stylesheet" href="../vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
   <!-- SLIDER CTRL-->
   <link rel="stylesheet" href="../vendor/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css">
   <!-- CHOSEN-->
   <link rel="stylesheet" href="../vendor/chosen_v1.2.0/chosen.min.css">
   <!-- DATETIMEPICKER-->
   <link rel="stylesheet" href="../vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
   <!-- COLORPICKER-->
   <link rel="stylesheet" href="../vendor/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
   <!-- SELECT2-->
   <link rel="stylesheet" href="../vendor/select2/dist/css/select2.css">
   <link rel="stylesheet" href="../vendor/select2-bootstrap-theme/dist/select2-bootstrap.css">
   <!-- FILESTYLE-->
   <script src="../vendor/bootstrap-filestyle/src/bootstrap-filestyle.js"></script>
   <!-- TAGS INPUT-->
   <script src="../vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
   <!-- CHOSEN-->
   <script src="../vendor/chosen_v1.2.0/chosen.jquery.min.js"></script>
   <!-- SLIDER CTRL-->
   <script src="../vendor/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
   <!-- INPUT MASK-->
   <script src="../vendor/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>
   <!-- WYSIWYG-->
   <script src="../vendor/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script>
   <script src="../vendor/bootstrap-wysiwyg/external/jquery.hotkeys.js"></script>
   <!-- MOMENT JS-->
   <script src="../vendor/moment/min/moment-with-locales.min.js"></script>
   <!-- DATETIMEPICKER-->
   <script type="text/javascript" src="../vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
   <!-- COLORPICKER-->
   <script type="text/javascript" src="../vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
   <!-- Demo-->
   <script src="js/demo/demo-forms.js"></script>
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="css/app.css" id="maincss">
   <link rel="stylesheet" href="css/theme-e.css">
   <script type="text/javascript" src="jscontrollers/app.js"></script>
</head>

<body>
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
          <?php
            include_once 'content/partials/top-navbar.php';
          ?>
         <!-- END Top Navbar-->
      </header>
      <!-- sidebar-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <?php
           include_once 'content/partials/sidebar-left.php';
         ?>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- offsidebar-->
      <aside class="offsidebar hide">
         <!-- START Off Sidebar (right)-->
         <?php
           include_once 'content/partials/sidebar-right.php';
         ?>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- Main section-->
      <section>
         <!-- Page content-->
         <?php
          if ($c != 'dashboard') { }

          include_once 'content/'.$c.'.php';
         ?>
      </section>
      <!-- Page footer-->
      <footer>
         <span>&copy; 2017 - Esirom Ltd.</span>
      </footer>
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="../vendor/modernizr/modernizr.custom.js"></script>
   <!-- MATCHMEDIA POLYFILL-->
   <script src="../vendor/matchMedia/matchMedia.js"></script>
   <!-- JQUERY-->
   <script src="../vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="../vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="../vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- JQUERY EASING-->
   <script src="../vendor/jquery.easing/js/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="../vendor/animo.js/animo.js"></script>
   <!-- SLIMSCROLL-->
   <script src="../vendor/slimScroll/jquery.slimscroll.min.js"></script>
   <!-- SCREENFULL-->
   <script src="../vendor/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   <script src="../vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
   <!-- RTL demo-->
   <script src="js/demo/demo-rtl.js"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- SPARKLINE-->
   <script src="../vendor/sparkline/index.js"></script>
   <!-- FLOT CHART-->
   <script src="../vendor/Flot/jquery.flot.js"></script>
   <script src="../vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
   <script src="../vendor/Flot/jquery.flot.resize.js"></script>
   <script src="../vendor/Flot/jquery.flot.pie.js"></script>
   <script src="../vendor/Flot/jquery.flot.time.js"></script>
   <script src="../vendor/Flot/jquery.flot.categories.js"></script>
   <script src="../vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
   <!-- CLASSY LOADER-->
   <script src="../vendor/jquery-classyloader/js/jquery.classyloader.min.js"></script>
   <!-- MOMENT JS-->
   <script src="../vendor/moment/min/moment-with-locales.min.js"></script>
   <!-- DEMO-->
   <script src="js/demo/demo-flot.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="js/app.js"></script>
</body>

</html>
