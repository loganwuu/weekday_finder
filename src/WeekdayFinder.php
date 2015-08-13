<?php
    class WeekdayFinder
    {
        function findWeekday($month, $day, $year)
        {
            date_default_timezone_set('UTC');

            if (empty($year)) {
                return "Please enter a year.";
            } elseif (!checkdate($month, $day, $year)) {
                return "Invalid date!";
            } else {
                return date("l", mktime(0, 0, 0, $month, $day, $year));
            }
        }
    }
?>
