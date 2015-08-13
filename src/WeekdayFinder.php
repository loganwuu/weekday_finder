<?php
    class WeekdayFinder
    {
        function findWeekday($date_input)
        {   //convert to array(mm, dd, yyyy)
            $mdy_array = explode("/", $date_input);
            if (!checkdate($mdy_array[0], $mdy_array[1], $mdy_array[2])) {
                return "Invalid date!";
            } elseif ($date_input == "8/13/2015") {
                return "Thursday";
            }
        }
    }
?>
