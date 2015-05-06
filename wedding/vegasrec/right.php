<?php
include('../../include.php');

?>
<TITLE>Vegas Right Page</TITLE>
<HEAD>
	<LINK REL='stylesheet' TYPE='text/css' HREF='../../stylesheets/maincss.php?file=<?php echo $file;?>'>
</HEAD>
<FRAMESET ROWS='50%,50%' BORDER='0' BGCOLOR='C0C0C0' FRAMEBORDER='0'>
 	<FRAME SRC='lists.php?loc=<?php echo $loc."&locn=".$locn."&amt=".$amt;?>' NAME='lists' SCROLLING='no'>
	<FRAME SRC='../../pictures/num.php' NAME='num' SCROLLING='no'>
</FRAMESET>