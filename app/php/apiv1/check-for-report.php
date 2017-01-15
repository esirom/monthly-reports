<?php
    require_once '../connection.php';
    require_once 'functions/date-functions.inc';

    $month = $_GET['month'];
    $year = $_GET['year'];
    $brand = $_GET['brandId'];

    $fb_engagement_sql = "SELECT * FROM monthly_followers WHERE brand_id='{$brand}' AND month='{$month}' AND year='{$year}'";

    $fb_result = $connection->query($fb_engagement_sql);

    $data = array();
    if ($fb_result->num_rows > 0) {
        $stats = $fb_result->fetch_assoc();

        $data['stats'] = array('id'=>$stats['id'], 'no_of_likes'=>$stats['no_of_likes'], 'no_of_followers'=>$stats['no_of_followers']);

    }

    //Checking for data from previous months.
    $last_month_date = checkForPrevious($month, $year);

    $last_month_engagement_sql = "SELECT * FROM monthly_followers WHERE brand_id='{$brand}' AND month='{$last_month_date["last_month"]}' AND year='{$last_month_date["last_year"]}'";

    $last_month_engagement_result = $connection->query($last_month_engagement_sql);

    if ($last_month_engagement_result->num_rows > 0) {
        $last_month_stats = $last_month_engagement_result->fetch_assoc();

        $data['last_month_stats'] = array('id'=>$last_month_stats['id'], 'no_of_likes'=>$last_month_stats['no_of_likes'], 'no_of_followers'=>$last_month_stats['no_of_followers']);
    }

    header('Content-type: application/json');
    echo json_encode($data);

