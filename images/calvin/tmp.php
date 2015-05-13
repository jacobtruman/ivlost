<?php

$files = glob("./little/*.gif");

foreach($files as $file) {
	$out_file = str_replace(".gif", ".png", $file);
	imagepng(imagecreatefromstring(file_get_contents($file)), $out_file);
}

?>
