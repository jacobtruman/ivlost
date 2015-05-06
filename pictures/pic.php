<?php
include('../include.php');

$next = $num + 1;
$prev = $num - 1;
$dnext = $disc + 1;
$dprev = $disc - 1;
$end = $amt + 1;
$pic = $loc."/".$num.".jpg";
?>
<HEAD>
	<LINK REL='stylesheet' TYPE='text/css' HREF='css.php?pic=<?php echo $pic;?>'>
</HEAD>
<BODY>

<CENTER>
<TABLE width=100%>
<TR>
<TD ALIGN=left>
<?php
if ($prev == 0){
echo "<A href='../mid.php'>";
}else{
echo "<A href='pic.php?num=".$prev."&loc=".$loc."&locn=".$locn."&disc=".$dprev."&amt=".$amt."'>";
}
?>
<IMG SRC='../images/larrow.jpg' BORDER='0'>
</A>
</TD>
<TD align='center'>
<FONT SIZE='1'>
<?php
echo $desc;
?>
</FONT>
</TD>
<TD ALIGN=right>
<?php
if ($next == $end){
echo "<A href='/mid.php'>";
}else{
echo "<A href='pic.php?num=".$next."&loc=".$loc."&locn=".$locn."&disc=".$dnext."&amt=".$amt."'>";
}
?>
<IMG SRC='../images/rarrow.jpg' BORDER='0'>
</A>
</TD>
</CENTER>
</TABLE>
</BODY>
