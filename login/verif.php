<?php
$root = $_SERVER['DOCUMENT_ROOT'];
/*include($root.'/users.php');
$username = $$_POST['username'];
$filename = $root."/myblog/myblog.txt";
if (file_exists($filename)){
	if ($_POST['blogact'] == 'insert'){
		if ((in_array($_POST['username'], $users)) && ($_POST['pwd'] == $username['password'])){
			insert($filename);
		}else{
			echo "<center>Your username and password combination was not recognized, please try again.</center>";
		}
	}else if ($_POST['blogact'] == 'view'){
		viewblog($filename);
	}else{
	}
}else{
   print "The file $filename does not exist";
}*/

$userfile = $root."/users/accounts/".$username;
$filename = $root."/myblog/myblog.txt";
if (file_exists($filename)){
	if ($_POST['blogact'] == 'insert'){
		if (file_exists($userfile)){
			$lines = file($userfile);
			$password = crypt($pwd, '$1$');
			$cpwd = substr ($lines[2], 0, -1);
			if ($password == $cpwd){
				insert($filename);
				echo "<center>Message successfully posted.</center>";
			}else{
				echo "<center>Your username and password combination was not recognized, please try again.</center>";
			}
		}else{
			echo "<center>Your username and password combination was not recognized, please try again.</center>";
		}
	}else if ($_POST['blogact'] == 'view'){
		viewblog($filename);
	}
}else{
	echo "<center>The file ".$filename." does not exist.</center>";
}

function insert($filename){
$datecolor = '#FF0000';
$today = date("D M j Y G:i:s");
$fd = fopen ($filename, "rb");
$contents = fread ($fd, filesize ($filename));
$val .= "<font style='FONT-SIZE:12pt;'><b><u>".$_POST['subject']."</u></b></font>\n";
$val .= $_POST['content']."\n";
$val .= "<b>Posted on: </b><font color='".$datecolor."' style='color:".$datecolor.";'>".$today."</font> <b>By: </b><a href='users/profile.php?username=".$_POST['username']."' target='right'>".$_POST['username']."</a>\n\n\n";
$val .= stripslashes($contents);
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

function viewblog($filename){
	$lines = file($filename);
	foreach ($lines as $line_num => $line){
		echo stripslashes(nl2br($line));
	}
}
?>
