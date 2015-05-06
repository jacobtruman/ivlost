<?php
$page = $_SERVER['SCRIPT_NAME'];
$file = basename($page, ".php");

$query=$_SERVER['QUERY_STRING'];
$variables=explode("&",$query);
for ($i=0;$i<=count($variables);$i++){
	$tab=explode("=",$variables[$i]);
	$$tab[0] = str_replace('%20', ' ',$tab[1]);
}
?>