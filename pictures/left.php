<?php
include('../include.php');
?>

<title>
	Pictures Left Page
</title>
<head>
	<link REL='stylesheet' TYPE='text/css' HREF='../stylesheets/maincss.php?file=<?php echo $file; ?>'/>
</head>
<center>
	<br/>
	<br/>
	<?php

	$locs = array('home' => 'Home', 'aim' => 'AIM', 'meandkaty' => 'Me and Katy', 'family' => 'My Family');

	foreach ($locs as $dir => $title) {
		if (file_exists($dir) && is_dir($dir)) {
			$files = glob($dir."/*.{jpg,png,gif}", GLOB_BRACE);
		}
		$numfiles = count($files);
		echo "<a href='midd.php?loc={$dir}&title={$title}&amt={$numfiles}' target='mid'>{$title}</a><br /><br />\n";
	}
	?>
</center>
