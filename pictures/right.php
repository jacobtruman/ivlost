<?php
include('../include.php');
?>
<HEAD>
	<TITLE>Pictures Right Page</TITLE>
</HEAD>
<FRAMESET ROWS='50%,50%' BORDER='0' BGCOLOR='C0C0C0' FRAMEBORDER='0'>
 	<FRAME SRC='lists.php?loc=<?php echo $loc."&locn=".$locn."&amt=".$amt;?>' NAME='lists' SCROLLING='no'>
	<FRAME SRC='num.php' NAME='num' SCROLLING='no'>
</FRAMESET>
