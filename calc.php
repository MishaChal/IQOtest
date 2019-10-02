<?php
$dstart = new DateTime( $_POST["date"]);
list ($day,$month,$year) = explode ('.',$dstart->format('d.m.y'));
$number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$days = date('L')?366:365;
$qq=$_POST["spv"];
if ($_POST["YesOrNo"]=="Нет") {$qq=0; }
    $result = $_POST["sum"]+($_POST["sum"]+$qq)* $number *(10/$days) ; // не знаю насколько правильна эта формула, ибо в ней не учитывается время вклада и не совсем понятно количество дней какого года рассматривать
    $result=round($result,0, PHP_ROUND_HALF_DOWN);
    echo json_encode($result); 
?>