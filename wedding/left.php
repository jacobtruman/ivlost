<?php
include('../include.php');
?>

<TITLE>Wedding Left Page</TITLE>
<HEAD>
	<LINK REL='stylesheet' TYPE='text/css' HREF='../stylesheets/maincss.php?file=<?php echo $file;?>'>
</HEAD>
<CENTER>
   <BR>
   <B>My Wedding</B>
					<BR>
					<BR>
					<a href='utahrec/mid.php?loc=utahrec&locn=Utah Reception' target='mid'>
						Utah Reception
					</a>
					<BR>
					<BR>
					<a href='vegasrec/mid.php?loc=../wedding/vegasrec&locn=Vegas Reception&amt=4' target='mid'>
						Vegas Reception
					</a>
					<BR>
					<BR>
					<A HREF='invitation/mid.php?loc=invitation&locn=Invitation' target='mid'>
						Invitation
					</a>
					<BR>
					<BR>
					<A HREF='bridals/mid.php?loc=bridals&locn=Bridals&amt=11' target='right'>
						Bridals
					</a>
					<BR>
					<BR>
<?php

		$loc = array('saltlake');
		$locn = array('Salt Lake');
		$locc = count($loc);
		$i = 0;
		while ($i <= $locc){
		$dir = $loc["$i"];
			$j = 0;
			$path = $dir;
			if (file_exists($path)){
				$dir_handle = @opendir($path) or die("Unable to open $path");
				if (file_exists($file)){
					$ft = filetype($file);
				}else{
				}
				while ($file = readdir($dir_handle)) {
					if ($path == '.'){
					}else{
						$file = $path.'/'.$file;
						//echo $file.'<br>';
					}
					if (file_exists($file)){
						$ft = filetype($file);
					}else{
					}
					//echo $ft;
					if ($ft == 'dir'){
					}else{
					$type = substr(strrchr("$file", "."), 1);
						if (($type == 'jpg') || ($type == 'gif') || ($type == 'png')){
							$j++;
						}else{
						}
					}
				}
			closedir($dir_handle);
			}else{
			}
		$numfiles = $j;
		echo "<a href='../pictures/midd.php?loc=".$dir."&locn=".$locn["$i"]."&amt=".$numfiles."' target='mid'>";
		echo $locn["$i"];
		echo "</a>";
		echo "<BR><BR>";
		$i++;
		}
	?>
</CENTER>

