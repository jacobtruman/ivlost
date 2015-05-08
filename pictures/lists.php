<?php
include('../include.php');
?>
<title>Pictures Lists Page</title>
<head>
	<link rel='stylesheet' type='text/css' href='../stylesheets/maincss.php?file=<?php echo $file; ?>' />
</head>
<center>
	<br />
	<br />
	<b>
		<?php
		echo $title;
		?>
	</b>
	<br />
	<br />
	<table style="border-collapse: collapse" cellpadding="0" cellspacing="0">
		<?php
		$numl = ceil($amt / 10);
		$i = 1;
		while ($i <= $numl) {
			$dtop = $i * 10;
			$bot = ($i * 10) - 9;
			if ($dtop >= $amt) {
				$top = $amt;
			} else {
				$top = $dtop;
			}

			if ($top == $bot) {
				$hlink = $top;
			} else {
				$hlink = $bot . "-" . $top;
			}

			echo "<tr><td align='center' width='100'><a href='list.php?loc={$loc}&title={$title}&amt={$amt}&top={$top}&bot={$bot}' target='num'>{$hlink}</a></td></tr>\n";
			$i++;
		}
		?>
	</table>
</center>
