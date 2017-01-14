<?php
    function checkForPrevious($month) {
        if ($month == 01) {
            $previous_month = 12;
        } else {
            $previous_month = $month-1;
        }

        return $previous_month;
    }