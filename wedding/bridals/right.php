<?php
include('../../include.php');

$files = glob("images/*.{jpg,png,gif}", GLOB_BRACE);

?>
<title>Invitation Right Page</title>
<head>
	<link rel='stylesheet' type='text/css' href='../../stylesheets/maincss.php?file=<?php echo $file; ?>'/>
</head>

<center>
	<br/>
	<?php
	echo "<b>{$title}</b><br />\n";

	foreach ($files as $key => $file) {
		$file_info = pathinfo($file);
		$size = getimagesize($file);
		$resizew = $size[0];
		$resizel = $size[1];
		echo "<script language='javascript'>function link{$key}(){window.open('../pic.php?img={$file}&title={$title}&loc={$loc}&picn={$i}','{$file_info['filename']}','width={$resizew},height={$resizel},location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no');}</script>
		<br />
		<a href='JavaScript: link{$key}()'>{$file_info['filename']}</a>\n";
	}

	?>
</center>
