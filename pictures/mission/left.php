<?php
include('../../include.php');
?>
<TITLE>Pictures Left Page</TITLE>
 <HEAD>
   		<LINK REL='stylesheet' TYPE='text/css' HREF='../../stylesheets/maincss.php?file=<?php echo $file;?>'>
 </HEAD>
   <CENTER>
   <BR>
   <BR>
   <?php
		$loc = array('cowley', 'worland', 'cody', 'kalispell', 'helena', 'greatfalls', 'riverton', 'billings');
		$locn = array('Cowley', 'Worland', 'Cody', 'Kalispell', 'Helena', 'Great Falls', 'Riverton', 'Billings');
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
						$file = $path."/".$file;
						//echo $file."<BR>";
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
		echo "<a href='../midd.php?loc=mission/".$dir."&locn=".$locn["$i"]."&amt=".$numfiles."' target='mid'>";
		echo $locn["$i"];
		echo "</a>";
		echo "<BR><BR>";
		$i++;
		}
	?>
</CENTER>
