<?php
    function checkForPrevious($month, $year) {
        if ($month == 01) {
            $previous_month = 12;
            $previous_year = $year-1;
        } else {
            $previous_month = $month-1;
            $previous_year = $year;
        }

        return array('last_month'=>$previous_month, 'last_year'=>$previous_year);
    }