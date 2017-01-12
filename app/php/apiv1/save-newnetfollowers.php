<?php
  require_once "../connection.php";

  $brand_id = $_POST['brandId'];
  $likes = $_POST['facebookLikes'];
  $followers = $_POST['instagramFollowers'];

  $query = "INSERT INTO monthly_followers (no_of_followers, no_of_likes, brand_id) VALUES ('{$followers}', '{$likes}', '{$brand_id}')";

  if ($connection->query($query)) {
    echo "Saved";
  }
?>
