<?php
$todayDate = date("Y-m-d");// current date
echo "Today: ".$todayDate."<br>";
$now = strtotime(date("Y-m-d"));
//Add one day to today
$date = date('Y-m-j', strtotime('+1 day', $now));
echo "After adding 1 day = ".$date."<br>";
$addMonth = 5;
//Add variabel addMonth to today
$date2 = date('Y-m-j', strtotime('+'.$addMonth.' month', $now));
echo "After adding $addMonth month = ".$date2."<br>";
//Add 6 year to today
$date3 = date('Y-m-j', strtotime('+6 year', $now));
echo "After adding 6 year = ".$date3."<br>";
?>