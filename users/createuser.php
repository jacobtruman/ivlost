<?php
if ($uact == 'create'){
$dfile = 'default';
$filename = '../../accounts/'.$username;
	if ($pwd == $confpwd){
		if (file_exists($filename)){
			echo "<font color='#FF0000' style='color:#FF0000;'>".$username."</font> already exists, pick something else.";
		}else{
			if (!copy($dfile, $filename)) {
				echo "failed to copy $dfile...\n";
			}
			insert($filename, $username, $pwd, $name, $priv);
		}
	}else{
		echo "Your passwords do not match.";
	}
}

function insert($filename, $username, $pwd, $name, $priv){
$priv = "user";
$pwd = (crypt( $pwd, '$1$' ));
$today = date("D M j Y G:i:s");
$fd = fopen ($filename, "rb");

$val .= $username."\n";
$val .= $name."\n";
$val .= $pwd."\n";
$val .= $priv."\n";
$val .= $today;

echo "<font color='#FF0000' style='color:#FF0000;'>".$username."</font> was created successfully.";

fclose ($fd);

if (is_writable($filename)){


   if (!$fp = fopen($filename, 'w+')){
        print "Cannot open file ($filename)";
        exit;
   }

   if (!fwrite($fp, $val)){
       print "Cannot write to file ($filename)";
       exit;
   }
fclose($fp);

}else{
   print "The file $filename is not writable";
}
}

?>
