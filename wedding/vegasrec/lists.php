<?php
include('../../include.php');

$vmap = "images/vmap.gif";
$vsize = getimagesize ($vmap);
$vresizew = $vsize[0];
$vresizel = $vsize[1];
$vname = "Map to Vegas Reception";
?>
<TITLE>Vegas Lists Page</TITLE>
 <HEAD>
   		<LINK REL='stylesheet' TYPE='text/css' HREF='../../stylesheets/maincss.php?file=<?php echo $file;?>'>
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
<script language='javascript'>
function vmap()
{
window.open("../pic.php?img=<?php echo $vmap;?>&name=<?php echo $vname;?>&locn=<?php echo $locn;?>&loc=<?php echo $loc;?>","front","width=<?php echo $vresizew;?>,height=<?php echo $vresizel;?>,location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no");
}
</script>
	<TABLE style="border-collapse: collapse" cellpadding="0" cellspacing="0">
		<TR>
			<td align='center'>
					<a href='JavaScript: vmap()'>
<?php echo $vname;?>
					</a>
			</td>
		</tr>
		<TR>
			<td align='center'>

			</td>
		</tr>
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
	echo "<TR><TD align='center' width='100'><a href='../../pictures/list.php?loc=".$loc."&locn=".$locn."&amt=".$amt."&top=".$top."&bot=".$bot."' target='num'>".$bot."-".$top."</a></TD></TR>";
   $i++;
endwhile;
?>
	</TABLE>
</CENTER>