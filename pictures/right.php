<?php
include('../include.php');
?>
<head>
	<title>Pictures Right Page</title>
</head>
<frameset rows='50%,50%' border='0' bgcolor='C0C0C0' frameborder='0'>
 	<frame src='lists.php?loc=<?php echo $loc."&title=".$title."&amt=".$amt;?>' name='lists' scrolling='no' />
	<frame src='num.php' name='num' scrolling='no' />
</frameset>
