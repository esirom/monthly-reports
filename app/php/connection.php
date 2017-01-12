<?php
  $dbname = "esirom-main";
  $dbuser = "monthly-reporter";
  $dbpass = "LvQf?&>4:!";
  $dbhost = "104.131.111.59";

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  //Checking if the connection was established.
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySql: ". mysqli_connect_error();
  }
?>
