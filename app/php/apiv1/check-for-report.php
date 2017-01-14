<?php
    require_once '../connection.php';

    $month = $_GET['month'];
    $year = $_GET['year'];
    $brand = $_GET['brandId'];

    $fb_engagement_sql = "SELECT * FROM monthly_followers WHERE brand_id='{$brand}' AND month='{$month}' AND year='{$year}'";

    $fb_result = $connection->query($fb_engagement_sql);

    $data = array();
    if ($fb_result->num_rows > 0) {
        $stats = $fb_result->fetch_assoc();

        $data['stats'] = array('id'=>$stats['id'], 'no_of_likes'=>$stats['no_of_likes'], 'no_of_followers'=>$stats['no_of_followers']);

    } else {
        echo "failed";
    }

    header('Content-type: application/json');
    echo json_encode($data);

