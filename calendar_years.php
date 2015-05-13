<?php

require_once("AutoLoad.php");

$calendar = new Calendar();

echo implode("<br /><br />\n", $calendar->getYearLinks());

?>
