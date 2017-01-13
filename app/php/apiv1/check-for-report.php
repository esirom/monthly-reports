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
    print json_encode($data);
  } else {
    echo "failed";
  }
?>
