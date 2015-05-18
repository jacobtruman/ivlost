<?php

require_once("AutoLoad.php");

$calendar = new Calendar();

echo $calendar->displayMonth($_REQUEST['year'], $_REQUEST['month']);

?>
