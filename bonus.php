<?php

if (!isset($_GET['month']) && !isset($_GET['year'])) {
    echo "<form action='' method='GET'> ";
    echo "Enter the month number:<input type='text' name='month' /><br />";
    echo "Enter the year number:<input type='text' name='year' /><br />";
    echo "<input type='submit' value='Enter' /></form>";
} else {
    //Lab 1.4 Bonus

    function getMonthName($numb) {
        switch ($numb) {
            case'1':
                return 'January';
            case'2':
                return 'February';
            case'3':
                return 'March';
            case'4':
                return 'April';
            case'5':
                return 'May';
            case'6':
                return 'June';
            case'7':
                return 'July';
            case'8':
                return 'August';
            case'9':
                return 'September';
            case'10':
                return 'October';
            case'11':
                return 'November';
            case'12':
                return 'December';
            default:
                return "Error: incorrectly number.";
        }
    }

    function getWeekDays() {
        return array(
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
            7 => 'Sunday'
        );
    }
    function getMonthCalendar($month, $year) {
        $dayInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $weeks = [];
        $week = [];
        for ($day = 1; $day <= $dayInMonth; $day++) {
            $varTime = mktime(0, 0, 0, $month, $day, $year);
            $arr = getdate($varTime);
            $dayOfWeek = $arr['wday'];
            if ($dayOfWeek == 0) {
                $dayOfWeek = 7;
            }
            //echo $dayOfWeek."-".$day."<br />";
            if (empty($i) || $i === null) {
                $i = 1;
            }
            for (;$i <= 7; $i++) {
                if ($dayOfWeek == $i) {
                    $week[] = $day;
                    $i++;
                    break;
                } else {
                    $week[] = "";
                }
            }
            if (count($week) === 7) {
                $weeks[] = $week;
                $week = [];
                $i = null;
            }
        }
        while (count($week) < 7 && count($week) != null ) {
            $week[] = "";
        }
        $weeks[] = $week;
        return $weeks;
    }
//$resaultMonth = getMonthCalendar(11, 2017);
//echo "<pre>";
//print_r($resaultMonth);
//echo "</pre>";


    function buildCalendarTable($month, $year) {
        $resaultMonth = getMonthCalendar($month, $year);
        echo "<table width='100%'  rules='all' style='text-align: center; border: solid 1px;'>";
        echo "<tr>";
        echo "<td colspan='7'>". getMonthName($month)." ".$year."</td>";
        echo "</tr>";
        echo "<tr>";
        $weekDays = getWeekDays();
        for ($i=1; $i <= count($weekDays); $i++) {
            echo "<td>".$weekDays[$i]."</td>";
        }
        echo "</tr>";
        for ($i=0; $i < count($resaultMonth); $i++) {
            echo "<tr>";
            for ($k=0; $k < count($resaultMonth[$i]); $k++ ) {
                echo "<td>".$resaultMonth[$i][$k]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    buildCalendarTable($_GET['month'], $_GET['year']);
}