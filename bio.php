<?php

require_once("AutoLoad.php");

$calendar = new Calendar();

echo $calendar->displayBio($_REQUEST['char']);

?>