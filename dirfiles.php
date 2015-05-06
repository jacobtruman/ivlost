<LINK REL='stylesheet' TYPE='text/css' HREF='stylesheets/plain.css'>
<CENTER>
<TABLE CELLPADDING='1' CELLSPACING='1' BORDER='0' WIDTH='95%'>
<?php
/*
  $path = ".";
  $dir_handle = @opendir($path) or die("Unable to open $path");
  $space="                                                                      ";
  echo "<PRE>";
  echo "Directory Listing of $path\n";
  while ($file = readdir($dir_handle)) {
  if 
        $t="<a href=$file>$file</a>";
        echo '<TR><TD>'.$t.substr($space,0,40-strlen($file)).'</TD>';
        $t=(filesize($file)/1024);
        $t=sprintf("%01.2f",$t)."kb ";
        echo '<TD>'.substr($space,0,10-strlen($t)) . $t.'</TD>';
        $t=date("d.M Y H:i:s", filemtime($file));
        echo '<TD>'.$t.substr($space,0,20-strlen($file)).'</TD></TR>';
        echo "\n";
  }
  closedir($dir_handle);
  echo "</PRE>";
*/
  $path = ".";
  //using the opendir function
  $dir_handle = @opendir($path) or die("Unable to open $path");
  
  //make string with 70 spaces
  $space="                                                                      ";
  
  echo "<PRE>";
  echo "Directory Listing of $path\n";
  //running the while loop
  
  while ($file = readdir($dir_handle)) {
  $ft=filetype($file);
  if ($ft == 'dir'){
        
        // filename - output left-justified
        $t="<a href=$file/dir.php>$file</a>";
        echo '<TR><TD>'.$t.substr($space,0,40-strlen($file)).'</TD>';
		
		// filetype - output right-justified
		$t=filetype($file);
        echo '<TD>'.$t.'</TD>' ;
		
        // filesize - output right-justified
        $t=(filesize($file)/1024);
        $t=sprintf("%01.2f",$t)."kb ";
        echo '<TD>'.substr($space,0,10-strlen($t)) . $t.'</TD>';
		
        // filedate - output left-justified
        $t=date("d.M Y H:i:s", filemtime($file));
        echo '<TD>'.$t.substr($space,0,20-strlen($file)).'</TD></TR>';
        echo "\n";
  }else{
        // filename - output left-justified
        $t="<a href=$file>$file</a>";
        echo '<TR><TD>'.$t.substr($space,0,40-strlen($file)).'</TD>';
		
		// filetype - output right-justified
		$t=filetype($file);
        echo '<TD>'.$t.'</TD>' ;
		
        // filesize - output right-justified
        $t=(filesize($file)/1024);
        $t=sprintf("%01.2f",$t)."kb ";
        echo '<TD>'.substr($space,0,10-strlen($t)) . $t.'</TD>';
		
        // filedate - output left-justified
        $t=date("d.M Y H:i:s", filemtime($file));
        echo '<TD>'.$t.substr($space,0,20-strlen($file)).'</TD></TR>';
        echo "\n";
	}
  }
  closedir($dir_handle);
  echo "</PRE>";
?>
</TABLE>
</CENTER>