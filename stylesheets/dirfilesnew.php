<head>
<link rel='stylesheet' type='text/css' href='main.css'>
</head>
<CENTER>
<TABLE CELLPADDING='1' CELLSPACING='1' BORDER='0' WIDTH='95%'>
<?php
$self_file = $_SERVER['PHP_SELF'];
$i = 0;
  $path = ".";
  $dir_handle = @opendir($path) or die("Unable to open $path");
  while ($file = readdir($dir_handle)) {
if ($path == '.'){
}else{
$file = $path.$file;
}
  if (file_exists($file)){
  $ft = filetype($file);
  }else{
  }
  if ($ft == 'dir'){
        
        $t="<a href=$file$self_file>$file</a>";
        echo '<TR><TD>'.$t.substr($space,0,40-strlen($file)).'</TD>';
		
		// filetype - output right-justified
		//$t=filetype($file);
		if (file_exists($file)){
  		$t = filetype($file);
  		}else{
  		}
        echo '<TD>'.$t.'</TD>' ;
  }else{
        // filename - output left-justified
        $t="<a href=$file>$file</a>";
        echo '<TR><TD>'.$t.substr($space,0,40-strlen($file)).'</TD>';
		
		// filetype - output right-justified
		//$t=filetype($file);
		if (file_exists($file)){
  		$t = filetype($file);
  		}else{
  		}
        echo '<TD>'.$t.'</TD>' ;
		$i++;
	}
  }
  closedir($dir_handle);
  echo "</PRE>";
echo $i;
?>
</TABLE>
</CENTER>
