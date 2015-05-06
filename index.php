<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
//echo $browser;

if ((strstr ($browser, 'Chrome')) || (strstr ($browser, 'Firefox'))){
	include('loadindex.php');
}else{
	include('bsux.php');
}

?>
