<?php
include('../include.php');
?>
<TITLE>Pictures List Page</TITLE>
 <HEAD>
   		<LINK REL='stylesheet' TYPE='text/css' HREF='../stylesheets/maincss.php?file=<?php echo $file;?>'>
 </HEAD>
	<CENTER>
	<TABLE style="border-collapse: collapse" cellpadding="0" cellspacing="0">
<?php
			$j = 0;
			$path = $loc.'/';
			if (file_exists($path)){
				$dir_handle = @opendir($path) or die("Unable to open $path");
				if (file_exists($file)){
					$ft = filetype($file);
				}else{
				}
				while ($file = readdir($dir_handle)) {
					if ($path == '.'){
					}else{
						$file = $path.$file;
						//echo $file."<br>";
					}
					if (file_exists($file)){
						$ft = filetype($file);
					}else{
					}
					//echo $ft."<BR>";
					if ($ft == 'dir'){
					}else{
					$type = substr(strrchr("$file", "."), 1);
					//echo $type.'<BR>';
						if (($type == 'jpg') || ($type == 'gif') || ($type == 'png')){
							$array1[$j] = $file;
							$array2[$j] = $type;
							$array3[$j] = date ("m d Y H:i:s.", filemtime($array1[$j]));
							$j++;
						}else{
						}
					}
				}
			closedir($dir_handle);
			}else{
			}

array_multisort ($array3, $array1);

$i = $bot - 1;
while ($i <= $top - 1){
$var = str_replace($loc, "", $array1[$i]);
$pname = str_replace(".".$array2[$i], "", $var);
$pname = str_replace("/", "", $pname);

$pic = str_replace($root , "/", $array1[$i]);
if (($i % 2) == 0){
$lcol = 'lnk1';
}else{
$lcol = '';
}

echo "<form name='form".$i."' method='POST' action='pic2.php' target='midd'>";
echo "<input type='hidden' name='num' value='".$i."'>";
echo "<input type='hidden' name='loc' value='".$loc."'>";
echo "<input type='hidden' name='locn' value='".$locn."'>";
echo "<input type='hidden' name='amt' value='".$amt."'>";
echo "<input type='hidden' name='pic' value='".$pic."'>";
echo "<input type='hidden' name='picname' value='".$pname."'>";
echo "</form>";
echo "<TR>";
echo "<TD align='Center' width='100'>";
echo "<a href='javascript: submitform".$i."()' class='".$lcol."'>".$pname."</a>";
echo "<BR>";
echo "</TD>";
echo "</TR>";
echo "<SCRIPT language='JavaScript'>";
echo "function submitform".$i."(){";
echo "document.form".$i.".submit();";
echo "}";
echo "</SCRIPT>";

$i++;
}
?> 
	</TABLE>
</CENTER>
