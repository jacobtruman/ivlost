<?php
$page = $_SERVER['SCRIPT_NAME'];
$file = basename($page, ".php");

if(count($_REQUEST)) {
	foreach ($_REQUEST as $key => $val) {
		$$key = $val;
	}
}

?>