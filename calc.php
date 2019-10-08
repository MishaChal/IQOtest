<?php
$dstart = new DateTime($_POST["date"]);
list($day, $month, $year) = explode('.', $dstart->format('d.m.Y'));
list($term, $name_year) = explode(' ', $_POST["depositTerm"]);
$result=$_POST["sum"];
if ($_POST["YesOrNo"]=="Нет") {
    for ($x=0;$x<=$term*12-1;$x++) {
        if (($month+$x)%12!=0) {
            $currentMonth = ($month+$x)%12;
        } else {
            $currentMonth=12;
        }
        $count=intdiv($month-1+$x, 12);
        $number = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $year+$count);
        $days = (($year+$count) % 4 == 0 && ($year+$count) % 100 != 0 || ($year+$count) % 400 == 0)?366:365;
        $promezhutok = $_POST["sum"]* $number *(0.1/$days);
        $result +=$promezhutok;
    }
} else {
    $promezhutok = $_POST["sum"];
    $percent=0;
    for ($x=0;$x<=$term*12-1;$x++) {
        if (($month+$x)%12!=0) {
            $currentMonth = ($month+$x)%12;
        } else {
            $currentMonth=12;
        }
        $count=intdiv($month-1+$x, 12);
        $number = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $year+$count);
        $days = (($year+$count) % 4 == 0 && ($year+$count) % 100 != 0 || ($year+$count) % 400 == 0)?366:365;
        $percent += $promezhutok* $number *(0.1/$days);
        $result =$promezhutok+$percent;
        $promezhutok+=$_POST["spv"];
    }
}
    $result=round($result, 2, PHP_ROUND_HALF_EVEN);
    echo json_encode($result);
