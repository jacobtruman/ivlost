<?php
include('../include.php');
?>
<HEAD>
	<TITLE>Pictures Midd Page</TITLE>
</HEAD>
<FRAMESET cols='*,240' BORDER='0' BGCOLOR='C0C0C0' FRAMEBORDER='0'>
	<FRAME SRC='../mid.php' NAME='midd' SCROLLING='no' noresize>
 	<FRAME SRC='right.php?loc=<?php echo $loc."&locn=".$locn."&amt=".$amt;?>' NAME='right' SCROLLING='no' noresize>
</FRAMESET>