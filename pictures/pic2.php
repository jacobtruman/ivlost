<?php
include('../include.php');

$k = 0;
$path = $loc . '/';
if (file_exists($path) && is_dir($path)) {
	$files = glob($path."/*.{jpg,png,gif}", GLOB_BRACE);

	foreach($files as $file) {
		if ($path != '.') {
			$file = $path . $file;
		}
		if (!is_dir($ft)) {
			$type = substr(strrchr($file, "."), 1);

			$file_arr[$file] = date("m d Y H:i:s.", filemtime($file));
		}
	}
}

$next = $num + 1;
$prev = $num - 1;
$end = $amt;
?>
<head>
	<link rel='stylesheet' type='text/css' href='css.php?pic=<?php echo $pic; ?>' />
</head>
<body>

<center>
	<table width=100%>
		<tr>
			<td align=left>
				<?php

				if ($prev < 0) {
					echo "<a href='../mid.php'><img src='../images/larrow.png' border='0'></a>\n";
				} else {

					$ppic = str_replace($root, "/", $array1[ $prev ]);

					echo "<form name='form" . $prev . "' method='POST' action='pic2.php' target='midd'>";
					echo "<input type='hidden' name='num' value='" . $prev . "'>";
					echo "<input type='hidden' name='loc' value='" . $loc . "'>";
					echo "<input type='hidden' name='title' value='" . $title . "'>";
					echo "<input type='hidden' name='amt' value='" . $amt . "'>";
					echo "<input type='hidden' name='pic' value='" . $ppic . "'>";
					echo "<input type='hidden' name='picname' value='" . $npname[ $prev ] . "'>";
					echo "</form>";
					echo "<a href='javascript: submitform" . $prev . "()'><img src='../images/larrow.png' border='0'></A>";
					echo "<script language='JavaScript'>";
					echo "function submitform" . $prev . "(){";
					echo "document.form" . $prev . ".submit();";
					echo "}";
					echo "</script>";
				}
				?>
			</td>
			<td align='center'>
				<font size='1'>
					<?php
					echo $title . ' - ' . $picname;
					?>
				</font>
			</td>
			<td align=right>
				<?php
				if ($next >= $end) {
					echo "<a href='../mid.php'><img src='../images/rarrow.png' border='0'></a>\n";
				} else {

					$npic = str_replace($root, "/", $array1[ $next ]);

					echo "<form name='form" . $next . "' method='POST' action='pic2.php' target='midd'>";
					echo "<input type='hidden' name='num' value='" . $next . "'>";
					echo "<input type='hidden' name='loc' value='" . $loc . "'>";
					echo "<input type='hidden' name='title' value='" . $title . "'>";
					echo "<input type='hidden' name='amt' value='" . $amt . "'>";
					echo "<input type='hidden' name='pic' value='" . $npic . "'>";
					echo "<input type='hidden' name='picname' value='" . $npname[ $next ] . "'>";
					echo "</form>";
					echo "<a href='javascript: submitform" . $next . "()'><img src='../images/rarrow.png' border='0'></A>";
					echo "<script language='JavaScript'>";
					echo "function submitform" . $next . "(){";
					echo "document.form" . $next . ".submit();";
					echo "}";
					echo "</script>";
				}
				?>
			</td>
</center>
</table>
</body>
