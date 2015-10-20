
<?php
$date1 = "2015-03";
$date2 = date('Y-m');
echo $date2;
$diff = abs(strtotime($date2) - strtotime($date1));
echo '<br>';
echo round($diff/60/60/24/30);



