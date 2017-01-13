<?php
  require_once "../connection.php";

  $brand_id = $_POST['brandId'];
  $likes = $_POST['facebookLikes'];
  $followers = $_POST['instagramFollowers'];
  $month = $_POST['month'];
  $year = $_POST['year'];

  $query = "INSERT INTO monthly_followers (no_of_followers, no_of_likes, brand_id, month, year) VALUES ('{$followers}', '{$likes}', '{$brand_id}', '{$month}', '{$year}')";

  if ($connection->query($query)) {
    echo "Saved";
  }
?>
