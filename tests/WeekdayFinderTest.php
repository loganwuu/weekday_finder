<?php
    require_once "src/WeekdayFinder.php";

    class WeekdayFinderTest extends PHPUnit_Framework_TestCase
    {
        function test_thur()
        {
            //Arrange
            $test_weekdayFinder = new WeekdayFinder;
            $date_input = "8/13/2015";

            //Act
            $result = $test_weekdayFinder->findWeekday($date_input);

            //Assert
            $this->assertEquals("Thursday", $result);
        }

        function test_validDate()
        {
            //Arrange
            $test_weekdayFinder = new WeekdayFinder;
            $date_input = "13/8/2015";

            //Act
            $result = $test_weekdayFinder->findWeekday($date_input);

            //Assert
            $this->assertEquals("Invalid date!", $result);
        }


    }
?>
