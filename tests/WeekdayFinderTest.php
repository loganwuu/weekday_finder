<?php
    require_once "src/WeekdayFinder.php";

    class WeekdayFinderTest extends PHPUnit_Framework_TestCase
    {
        function test_thur()
        {
            //Arrange
            $test_weekdayFinder = new WeekdayFinder;
            $month = 8;
            $day = 13;
            $year = 2015;

            //Act
            $result = $test_weekdayFinder->findWeekday($month, $day, $year);

            //Assert
            $this->assertEquals("Thursday", $result);
        }

        function test_validDate()
        {
            //Arrange
            $test_weekdayFinder = new WeekdayFinder;
            $month = 13;
            $day = 8;
            $year = 2015;

            //Act
            $result = $test_weekdayFinder->findWeekday($month, $day, $year);

            //Assert
            $this->assertEquals("Invalid date!", $result);
        }


    }
?>
