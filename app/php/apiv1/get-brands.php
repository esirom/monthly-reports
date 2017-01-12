<?php
  require_once '../connection.php';

  $query = "SELECT * FROM brands";

  $result = $connection->query($query);

  if ($result->num_rows > 0) {
    $data = $result->fetch_all(MYSQLI_ASSOC);
    print json_encode($data);
  }
?>
