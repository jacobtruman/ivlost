<?php

require_once("AutoLoad.php");

$calendar = new Calendar();

if ($_REQUEST['inc'] == 2) {
	$calendar->buildImageGrid(15);
} else {
	$calendar->buildImageGrid();
}

echo $calendar->getImageGrid();

?>
