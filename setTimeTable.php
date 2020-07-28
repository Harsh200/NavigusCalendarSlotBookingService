<?php

include_once('php_include/connection.php');


$timelist = "CREATE TABLE IF NOT EXISTS timelist (
             id INT(6) NOT NULL AUTO_INCREMENT,
             timeslot VARCHAR(5) NOT NULL,
             elementid VARCHAR(15) NOT NULL,
             PRIMARY KEY (id)
            )";
$query=$db->query($timelist);
if ($query) {
	echo "Connection to the database successful. Table 'timelist' created <br />";
} else {
	echo "Unable to connect to database. Table 'timelist' NOT created <br />";
}


$timepopulate ="INSERT INTO `timelist`(`timeslot`,`elementid`) VALUES ('9.00','one'),('9.30','two'),('10.00','three'),('10.30','four'),('11.00','five'),('11.30','six'),('12.00','seven'),('12.30','eight'),('13.00','nine'),('13.30','ten'),('14.00','eleven'),('14.30','twelve'),('15.00','thirteen'),('15.30','fourteen'),('16.00','fifteen'),('16.30','sixteen'),('17.00','seventeen'),('17.30','eighteen')";
$exec=$db->exec($timepopulate);
if($exec) {
	echo "the time data was entered correctly<br />";
} else {
	echo "An error occured and the time data was not entered<br />";
}




$days = "CREATE TABLE IF NOT EXISTS days (
		 id INT(7) NOT NULL AUTO_INCREMENT,
		 day VARCHAR (9) NOT NULL,
		 PRIMARY KEY (id)
		)";
$query = $db->query($days);
if ($query) {
	echo "Connection to the database succesful. Table 'days' created <br />";
} else {
	echo "Unable to connect to the database. Table 'days' NOT created <br />";
}



$dayspopulate = "INSERT INTO `days`(`day`) VALUES ('Monday'),('Tuesday'),('Wednesday'),('Thursday'),('Friday')";
$exec=$db->exec($dayspopulate);
if(isset($exec)) {
	echo "The 'day name' data was entered correctly<br />";
} else {
	echo "An error occured and the 'day name' data was not entered<br />";
}

?>