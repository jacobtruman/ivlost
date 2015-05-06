<?php
include('../include.php');
?>

<HEAD>
	<TITLE>Pictures Main Page</TITLE>
</HEAD>
<FRAMESET cols='224,*' BORDER='0' BGCOLOR='C0C0C0' FRAMEBORDER='0'> 
	<?php
		if ($dir != ''){
			echo "<FRAME SRC='../pictures/".$dir."/left.php' NAME='left' SCROLLING='no' noresize>\n";
		}else{
			echo "<FRAME SRC='../pictures/left.php' NAME='left' SCROLLING='no' noresize>\n";
		}
	?>
 	<FRAME SRC='mid.php' NAME='mid' SCROLLING='no' noresize> 
</FRAMESET>