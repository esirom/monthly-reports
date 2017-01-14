<?php
  require_once '../connection.php';

  $month = $_GET['month'];
  $year = $_GET['year'];
  $brand = $_GET['brandId'];

  $fb_engagement_sql = "SELECT * FROM monthly_followers WHERE brand_id='{$brand}' AND month='{$month}' AND year='{$year}'";

  $fb_result = $connection->query($fb_engagement_sql);

  if ($fb_result->num_rows > 0) {
    $data = $fb_result->fetch_all(MYSQLI_ASSOC);
    header('Content-type: application/json');

    $to_strip = array("[", "]");
    $unstripped_json = json_encode($data);

    $stripped_json = str_replace($to_strip, "",$unstripped_json);
    print $stripped_json;
  } else {
    echo "failed";
  }
?>
