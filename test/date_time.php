<?php
date_default_timezone_set('UTC');
$today = time()+86400;
echo $today;
$weekStartDate = date('l, F d, Y',strtotime("last Monday", $today));


?>
