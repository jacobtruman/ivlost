<?php
include('../../include.php');

$pth = 'images/';
$i = 1;
while ($i <= $amt){
$img = $pth.$i.'.jpg';
$size = getimagesize ($img);
$resizew = $size[0];
$resizel = $size[1];
$link["$i"] = '../pic.php?img='.$img.'&locn='.$locn.'&loc='.$loc.'&picn='.$i.'","'.$i.'","width='.$resizew.',height='.$resizel;
$linkn["$i"] = "link".$i;
$i++;
}

if(isset($link[$i]) and is_array($link[$i])){
}

?>
<TITLE>Invitation Right Page</TITLE>
 <HEAD>
   		<LINK REL='stylesheet' TYPE='text/css' HREF='../../stylesheets/maincss.php?file=<?php echo $file;?>'>
 </HEAD>

	<CENTER>
<BR>
<?php
echo '<B>'.$locn.'</B><BR>';
$i = 1;
while ($i <= $amt):
	echo '<script language="javascript">function '.$linkn[$i].'(){window.open("'.$link[$i].',location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no");}</SCRIPT>';
	echo '<BR><a href="JavaScript: '.$linkn[$i].'()">'.$i.'</a>';
   $i++;
endwhile;
?>
</CENTER>
