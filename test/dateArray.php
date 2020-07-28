
<?php


date_default_timezone_set('UTC');
$today = time();
$weekStartDate = date('l, F d, Y',strtotime("last Monday", $today));

$i=0;
$mon=0;
$secondsInWeek=604800;
$weekdays[0] = $weekStartDate;


	while($mon<1){
		for($i=0;$i<5;$i++){
			$weekdays = array();
			$weekdays[$i] = date('l, d M Y', strtotime('+'.$i.' days', strtotime($weekStartDate)));

			echo $weekdays[$i]."<br />";
			}
				$weekStartDate = date('l, F d, Y',strtotime("next Monday", $today));
				$today = time()+$secondsInWeek;
				$secondsInWeek=$secondsInWeek+604800;
				$mon++;
				echo "<hr />";

				}

print_r ($weekdays);

?>