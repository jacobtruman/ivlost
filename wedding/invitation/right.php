<?php
include('../../include.php');

$front = "images/front.jpg";
$fsize = getimagesize ($front);
$fresizew = $fsize[0];
$fresizel = $fsize[1];
$fname = "Front";

$inside = "images/inside.jpg";
$isize = getimagesize ($inside);
$iresizew = $isize[0];
$iresizel = $isize[1];
$iname = "Inside";

$cardl = "images/cardl.jpg";
$lsize = getimagesize ($cardl);
$lresizew = $lsize[0];
$lresizel = $lsize[1];
$lname = "Luncheon Card";

$cardw = "images/cardw.jpg";
$wsize = getimagesize ($cardw);
$wresizew = $wsize[0];
$wresizel = $wsize[1];
$wname = "Sealing Card";

?>
<TITLE>Invitation Right Page</TITLE>
 <HEAD>
   		<LINK REL='stylesheet' TYPE='text/css' HREF='../../stylesheets/maincss.php?file=<?php echo $file;?>'>
 </HEAD>
		<script language='javascript'>
function front()
{
window.open("../pic.php?img=<?php echo $front;?>&name=<?php echo $fname;?>&locn=<?php echo $locn;?>&loc=<?php echo $loc;?>","front","width=<?php echo $fresizew;?>,height=<?php echo $fresizel;?>,location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no");
}

function inside()
{
window.open("../pic.php?img=<?php echo $inside;?>&name=<?php echo $iname;?>&locn=<?php echo $locn;?>&loc=<?php echo $loc;?>","inside","width=<?php echo $iresizew;?>,height=<?php echo $iresizel;?>,location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no");
}

function cardl()
{
window.open("../pic.php?img=<?php echo $cardl;?>&name=<?php echo $lname;?>&locn=<?php echo $locn;?>&loc=<?php echo $loc;?>","lcard","width=<?php echo $lresizew;?>,height=<?php echo $lresizel;?>,location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no");
}

function cardw()
{
window.open("../pic.php?img=<?php echo $cardw;?>&name=<?php echo $wname;?>&locn=<?php echo $locn;?>&loc=<?php echo $loc;?>","wcard","width=<?php echo $wresizew;?>,height=<?php echo $wresizel;?>,location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no");
}
</script>
	<CENTER>
<BR>
<B><?php echo $locn;?></B>
<BR>
<BR>
<BR>
					<a href='JavaScript: front()'>
<?php echo $fname;?>
					</a>
<BR>
<BR>
					<a href='JavaScript: inside()'>
<?php echo $iname;?>
					</a>
<BR>
<BR>
					<a href='JavaScript: cardl()'>
<?php echo $lname;?>
					</a>
<BR>
<BR>
					<a href='JavaScript: cardw()'>
<?php echo $wname;?>
					</a>
</CENTER>
