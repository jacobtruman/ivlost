<?php
include('../include.php');
?>

<head>
	<title>Pictures Main Page</title>
</head>
<frameset cols='224,*' border='0' bgcolor='C0C0C0' frameborder='0'>
	<?php
		if ($dir != ''){
			echo "<frame src='../pictures/".$dir."/left.php' name='left' scrolling='no' noresize />\n";
		}else{
			echo "<frame src='../pictures/left.php' name='left' scrolling='no' noresize />\n";
		}
	?>
 	<frame src='mid.php' name='mid' scrolling='no' noresize />
</frameset>