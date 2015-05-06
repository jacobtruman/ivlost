<?php
include('../include.php');

			$k = 0;
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
							$array1[$k] = $file;
							$array2[$k] = $type;
							$array3[$k] = date ("m d Y H:i:s.", filemtime($array1[$k]));
							$k++;
						}else{
						}
					}
				}
			closedir($dir_handle);
			}else{
			}

array_multisort ($array3, $array1);

$l = 0;
while ($l <= $amt){
$var = str_replace($loc, "", $array1[$l]);
$pname = str_replace(".".$array2[$l], "", $var);
$npname[$l] = str_replace("/", "", $pname);

$l++;
}

$next = $num + 1;
$prev = $num - 1;
$end = $amt;
?>
<HEAD>
	<LINK REL='stylesheet' TYPE='text/css' HREF='css.php?pic=<?php echo $pic;?>'>
</HEAD>
<BODY>

<CENTER>
<TABLE width=100%>
<TR>
<TD ALIGN=left>
<?php

if ($prev < 0){
echo "<A href='../mid.php'><IMG SRC='../images/larrow.png' BORDER='0'></A>";
}else{

$ppic = str_replace($root , "/", $array1[$prev]);

echo "<form name='form".$prev."' method='POST' action='pic2.php' target='midd'>";
echo "<input type='hidden' name='num' value='".$prev."'>";
echo "<input type='hidden' name='loc' value='".$loc."'>";
echo "<input type='hidden' name='locn' value='".$locn."'>";
echo "<input type='hidden' name='amt' value='".$amt."'>";
echo "<input type='hidden' name='pic' value='".$ppic."'>";
echo "<input type='hidden' name='picname' value='".$npname[$prev]."'>";
echo "</form>";
echo "<a href='javascript: submitform".$prev."()'><IMG SRC='../images/larrow.png' BORDER='0'></A>";
echo "<SCRIPT language='JavaScript'>";
echo "function submitform".$prev."(){";
echo "document.form".$prev.".submit();";
echo "}";
echo "</SCRIPT>";
}
?>
</TD>
<TD align='center'>
<FONT SIZE='1'>
<?php
echo $locn.' - '.$picname;
?>
</FONT>
</TD>
<TD ALIGN=right>
<?php
if ($next >= $end){
echo "<A href='../mid.php'><IMG SRC='../images/rarrow.png' BORDER='0'></A>";
}else{

$npic = str_replace($root , "/", $array1[$next]);

echo "<form name='form".$next."' method='POST' action='pic2.php' target='midd'>";
echo "<input type='hidden' name='num' value='".$next."'>";
echo "<input type='hidden' name='loc' value='".$loc."'>";
echo "<input type='hidden' name='locn' value='".$locn."'>";
echo "<input type='hidden' name='amt' value='".$amt."'>";
echo "<input type='hidden' name='pic' value='".$npic."'>";
echo "<input type='hidden' name='picname' value='".$npname[$next]."'>";
echo "</form>";
echo "<a href='javascript: submitform".$next."()'><IMG SRC='../images/rarrow.png' BORDER='0'></A>";
echo "<SCRIPT language='JavaScript'>";
echo "function submitform".$next."(){";
echo "document.form".$next.".submit();";
echo "}";
echo "</SCRIPT>";
}
?>
</TD>
</CENTER>
</TABLE>
</BODY>
