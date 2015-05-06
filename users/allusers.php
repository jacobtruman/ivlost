<head>
<link rel='stylesheet' type='text/css' href='../stylesheets/maincss.php'>
</head>
<CENTER>
<TABLE CELLPADDING='1' CELLSPACING='1' BORDER='0' WIDTH='95%'>
<?php
$self_file = $_SERVER['PHP_SELF'];
$i = 0;
$path = '../../accounts/';
$dir_handle = @opendir($path) or die("Unable to open ".$path);

while ($file = readdir($dir_handle)){
	if ($path != '.'){
		$file = $file;
	}
	if (file_exists($file)){
		$ft = filetype($file);
	}
    $t = "<a href='profile.php?username=".$file."' target='right'>".$file."</a>\n";
	if (($file != '..') && ($file != '.')){
		echo "<TR><TD>".$t.substr($space,0,40-strlen($file))."</TD></TR>\n";
	}
}
closedir($dir_handle);
echo "</PRE>\n";
//echo $i;
?>
</TABLE>
</CENTER>
