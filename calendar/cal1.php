<?php
include(dirname(__FILENAME__)."/../include.php");

$year_start = 2001;
$year_end = 2010;

if(!isset($char)){
	$char = 'na';
}


echo "<font><br />\n";

$cur_year = $year_start;

while($cur_year <= $year_end) {
	if ($cy >= $cur_year){
		echo "<a href='main.php?yr={$cur_year}&inc=1&char={$char}' target='main'>{$cur_year}</a><br /><br />\n";
	}
	$cur_year++;
}

echo "<br /><br />

<a href='http://www.ucomics.com/calvinandhobbes' target='_blank'><img src='images/ucomics.png' border='0'></a>

<BR><BR>

<a href='main.php?inc=3&char={$char}' target='main'>BIO'S</a>

</font>";

?>