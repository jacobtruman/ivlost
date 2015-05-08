<?php
include('../include.php');
?>
<title>Pictures List Page</title>
<head>
	<link rel='stylesheet' type='text/css' href='../stylesheets/maincss.php?file=<?php echo $file; ?>' />
</head>
<center>
	<table style="border-collapse: collapse" cellpadding="0" cellspacing="0">
		<?php
		if (file_exists($loc) && is_dir($loc)) {
			$files = glob($loc."/*.{jpg,png,gif}", GLOB_BRACE);
		}

		$i = $bot - 1;
		while ($i <= $top - 1) {
			$file = $files[$i];
			$file_info = pathinfo($file);

			if (($i % 2) == 0) {
				$lcol = 'lnk1';
			} else {
				$lcol = '';
			}

			echo "<form name='form" . $i . "' method='POST' action='pic2.php' target='midd'>
			<input type='hidden' name='num' value='" . $i . "'>
			<input type='hidden' name='loc' value='" . $loc . "'>
			<input type='hidden' name='title' value='" . $title . "'>
			<input type='hidden' name='amt' value='" . $amt . "'>
			<input type='hidden' name='pic' value='" . $file . "'>
			<input type='hidden' name='picname' value='" . $file_info['filename'] . "'>
			</form>
			<tr>
			<td align='Center' width='100'>
			<a href='javascript: submitform" . $i . "()' class='" . $lcol . "'>" . $file_info['filename'] . "</a>
			<br />
			</td>
			</tr>
			<script language='JavaScript'>
			function submitform" . $i . "(){
			document.form" . $i . ".submit();
			}
			</script>\n";

			$i++;
		}
		?>
	</table>
</center>
