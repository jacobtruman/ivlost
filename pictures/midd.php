<?php
include('../include.php');
?>
<head>
	<title>Pictures Midd Page</title>
</head>
<frameset cols='*,240' border='0' bgcolor='C0C0C0' frameborder='0'>
	<frame src='../mid.php' name='midd' scrollin='no' noresize />
 	<frame src='right.php?loc=<?php echo "{$loc}&title={$title}&amt={$amt}";?>' name='right' scrolling='no' noresize />
</frameset>