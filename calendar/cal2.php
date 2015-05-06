<?php
include(dirname(__FILENAME__)."/../include.php");

$cy = date("Y");
$cm = date("n");
$cday = date("d");

echo "<font>{$yr}<br /><br />\n";

for($i = 1; $i <= 12; $i++) {
	$dt = DateTime::createFromFormat('!m', $i);
	$mon = $dt->format('M');
	if (($cy == $yr) && ($cm < $i)){
		echo $mon;
	}else{
		echo "<a href='main.php?inc=2&mon={$i}&yr={$yr}&cmon={$cm}&cday={$cday}' target='main'>{$mon}</a>";
	}
	if($i % 3 == 0) {
		echo "<br /><br />\n";
	} else {
		echo "&nbsp\n";
	}
}

echo "</font>\n";