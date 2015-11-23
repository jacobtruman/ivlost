<?php

$directory = realpath("pictures/{$_REQUEST['dir']}");

if(!empty($directory)) {
	$dirs = processDir($directory);
	foreach($dirs as $dir) {
		$dir_parts = explode("/", $dir);
		$title = end($dir_parts);
		$title = ucwords(str_replace("_", " ", $title));
		echo "{$title}<br /><br />".PHP_EOL;
	}
}

function processDir($directory) {
	$ret_val = array();
	$dirs = glob($directory."/*");
	foreach($dirs as $dir) {
		if(is_dir($dir)) {
			$ret_val[] = $dir;
		}
	}
	return $ret_val;
}

?>