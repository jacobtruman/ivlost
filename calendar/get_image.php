<?php

$params = json_decode(base64_decode($_REQUEST['p']), true);

$path = $params['path'];

$file_path = dirname(__FILENAME__)."/{$path}";

if (file_exists($file_path)) {
	// Note: You should probably do some more checks 
	// on the filetype, size, etc.
	$contents = file_get_contents($file_path);

	// Note: You should probably implement some kind 
	// of check on filetype
	header('Content-type: image/gif');

	echo $contents;
}

?>
