<html>
<body>
<body bgcolor="#000000" text="#000000">
<BASE TARGET="right">
<?php 
include("include.php");

//$dir = "pictures/mission/helena";
// Directory Scan 
if(!($dp = opendir($dir))) die("Cannot open $dir"); 
// Place images into image tag 
while($file = readdir($dp)){ 
    if($file != '.' && $file != '..' && stristr($file,"jpg")) 
echo "<a href=pic.php?img=$dir/$file><img src=thumbnail.php?gd=2&src=".$dir."/$file&maxw=50 border=0></a>\n"; 
} 

closedir($dp); 

?>
</body>
</html>

