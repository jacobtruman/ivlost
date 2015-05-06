<?php
include('../include.php');
?>
<TITLE>Pictures Lists Page</TITLE>
 <HEAD>
   		<LINK REL='stylesheet' TYPE='text/css' HREF='../stylesheets/maincss.php?file=<?php echo $file;?>'>
 </HEAD>
	<CENTER>
<BR>
<BR>
<B>
<?php
echo $locn;
?>
</B>
<BR>
<BR>
	<TABLE style="border-collapse: collapse" cellpadding="0" cellspacing="0">
<?php
$numl = ceil($amt/10);
$i = 1;
while ($i <= $numl):
$dtop = $i * 10;
$bot = ($i * 10) - 9;
if ($dtop >= $amt){
$top = $amt;
}else{
$top = $dtop;
}

if ($top == $bot){
$hlink = $top;
}else{
$hlink = $bot."-".$top;
}

	echo "<TR><TD align='center' width='100'><a href='list.php?loc=".$loc."&locn=".$locn."&amt=".$amt."&top=".$top."&bot=".$bot."' target='num'>".$hlink."</a></TD></TR>";
   $i++;
endwhile;
?>
	</TABLE>
</CENTER>
