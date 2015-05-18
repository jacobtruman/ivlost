<?php

require_once("AutoLoad.php");

$calendar = new Calendar();

echo $calendar->displayMonths($_REQUEST['year']);

?>
