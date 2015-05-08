<?php
include('../include.php');

$next = $num + 1;
$prev = $num - 1;
$dnext = $disc + 1;
$dprev = $disc - 1;
$end = $amt + 1;
$pic = $loc . "/" . $num . ".jpg";
var_dump($loc);
var_dump($pic);
?>
<head>
	<link rel='stylesheet' type='text/css' href='css.php?pic=<?php echo $pic; ?>'/>
</head>
<body>

<center>
	<table width=100%>
		<tr>
			<td align=left>
				<?php
				if ($prev == 0) {
					echo "<a href='../mid.php'>\n";
				} else {
					echo "<a href='pic.php?num={$prev}&loc={$loc}&title={$title}&disc={$dprev}&amt={$amt}'>\n";
				}
				?>
				<img src='../images/larrow.jpg' border='0'>
				</a>
			</td>
			<td align='center'>
				<font size='1'>
					<?php
					echo $desc . "\n";
					?>
				</font>
			</td>
			<td align=right>
				<?php
				if ($next == $end) {
					echo "<a href='/mid.php'>\n";
				} else {
					echo "<a href='pic.php?num={$next}&loc={$loc}&title={$title}&disc={$dnext}&amt={$amt}'>\n";
				}
				?>
				<img src='../images/rarrow.jpg' border='0'>
				</a>
			</td>
</center>
</table>
</body>
