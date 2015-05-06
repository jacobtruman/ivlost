<?php
include("include.php");
?>

<TITLE>Mid Page</TITLE>
<HEAD>
<SCRIPT>
if ((screen.width>=1024) && (screen.height>=768))
{
document.write("<LINK REL='stylesheet' TYPE='text/css' HREF='stylesheets/maincss.php?file=mid1'>");
}else{
document.write("<LINK REL='stylesheet' TYPE='text/css' HREF='stylesheets/maincss.php?file=mid2'>");
}
</SCRIPT>
</HEAD>
<body>
<BR>
<BR>
<BR>
	<center>
		<b>
			Welcome to ivlost
		</b>
	</center>
	<BR>
	<BR>
	<BR>
	<?php
		include ($root.'/myblog/blog.php');
		viewblog($filename);
	?>
</body>
