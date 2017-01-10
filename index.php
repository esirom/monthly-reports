<?php
    @$c = ($_GET['content']);
    if (!$c || $c == '' || !isset($c) || empty($c)) {
        $c = 'home';
    }
    if(!file_exists('content/'.$c.'.php')) $c = 'home';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Monthly Reports</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="assets/images/esirom-logo.png" class="nav-logo" height="25px;">
                </a>
            </div>
            <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>
        </div>
    </nav>
    <?php
        if ($c != 'home') {}

        include_once 'content/'.$c.'.php';
    ?>
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>