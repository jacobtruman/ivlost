<?php
include('../../include.php');

$umap = "images/umap.gif";
$usize = getimagesize ($umap);
$uresizew = $usize[0];
$uresizel = $usize[1];
$uname = "Map to Utah Reception";

?>
<TITLE>Utah Right Page</TITLE>
 <HEAD>
   		<LINK REL='stylesheet' TYPE='text/css' HREF='../../stylesheets/maincss.php?file=<?php echo $file;?>'>
 </HEAD>
		<script language='javascript'>
function umap()
{
window.open("../pic.php?img=<?php echo $umap;?>&name=<?php echo $uname;?>&locn=<?php echo $locn;?>&loc=<?php echo $loc;?>","front","width=<?php echo $uresizew;?>,height=<?php echo $uresizel;?>,location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no");
}
</script>
	<CENTER>
<BR>
<BR>
<B><?php echo $locn;?></B>
<BR>
<BR>
	<TABLE style="border-collapse: collapse" cellpadding="0" cellspacing="0">
		<TR>
			<td align='center'>
					<a href='JavaScript: umap()'>
<?php echo $uname;?>
					</a>
			</td>
		</tr>
		</TR>
	</TABLE>
</CENTER>