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
					<a href='utahrec/mid.php?loc=utahrec&title=Utah Reception' target='mid'>
						Utah Reception
					</a>
					<BR>
					<BR>
					<a href='vegasrec/mid.php?loc=../wedding/vegasrec&title=Vegas Reception&amt=4' target='mid'>
						Vegas Reception
					</a>
					<BR>
					<BR>
					<A HREF='invitation/mid.php?loc=invitation&title=Invitation' target='mid'>
						Invitation
					</a>
					<BR>
					<BR>
					<A HREF='bridals/mid.php?loc=bridals&title=Bridals&amt=11' target='right'>
						Bridals
					</a>
					<BR>
					<BR>
<?php

		$loc = array('saltlake');
		$titles = array('Salt Lake');
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
		echo "<a href='../pictures/midd.php?loc=".$dir."&title=".$titles["$i"]."&amt=".$numfiles."' target='mid'>";
		echo $titles["$i"];
		echo "</a>";
		echo "<BR><BR>";
		$i++;
		}
	?>
</CENTER>

