<?php

require_once("AutoLoad.php");

$calendar = new Calendar();

echo $calendar->getImageGrid($_REQUEST['header']);

?>
