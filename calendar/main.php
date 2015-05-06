<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include($root."/include.php");

$cy = date("Y");

for($i=0;$i<20;$i++)
{
$myArray[$i] = rand(1,59);
}

if(isset($myArray[$i]) and is_array($myArray[$i])){
}

?>
<head>
<title>Calendar <?echo $cy;?></title>
<LINK REL='stylesheet' TYPE='text/css' HREF='stylesheets/calendar.css'>
<SCRIPT language=JavaScript src="js.js" type=text/javascript></SCRIPT>
<TABLE border='0' width='100%'>
<TR>
<TD align='center' width='15%' valign='top'>
<?php
include('cal1.php');
?>
</TD>
<TD width='8%' align='center' valign='top'>
</TD>
<TD width='50%' align='center' valign='top'>
<?php
if ($inc == 2){
include('cal.php');
echo "<BR><BR><img src='images/little/".$myArray[0].".gif'>";
echo " <img src='images/little/".$myArray[1].".gif'>";
echo " <img src='images/little/".$myArray[2].".gif'>";
echo " <img src='images/little/".$myArray[3].".gif'>";
echo " <img src='images/little/".$myArray[4].".gif'>";
echo "<BR><BR><img src='images/little/".$myArray[5].".gif'>";
echo " <img src='images/little/".$myArray[6].".gif'>";
echo " <img src='images/little/".$myArray[7].".gif'>";
echo " <img src='images/little/".$myArray[8].".gif'>";
echo " <img src='images/little/".$myArray[9].".gif'>";
echo "<BR><BR><img src='images/little/".$myArray[10].".gif'>";
echo " <img src='images/little/".$myArray[11].".gif'>";
echo " <img src='images/little/".$myArray[12].".gif'>";
echo " <img src='images/little/".$myArray[13].".gif'>";
echo " <img src='images/little/".$myArray[14].".gif'>";

}elseif ($inc == 'moe'){
include('meet/meet.php');
}elseif ($inc == 'cal'){
include('meet/meet.php');
}elseif ($inc == 'par'){
include('meet/meet.php');
}elseif ($inc == 'hob'){
include('meet/meet.php');
}elseif ($inc == 'ros'){
include('meet/meet.php');
}elseif ($inc == 'worm'){
include('meet/meet.php');
}elseif ($inc == 'sus'){
include('meet/meet.php');
}else{
echo "<BR><BR><img src='images/candh.png'><BR><BR><BR>";
echo "<BR><BR><img src='images/little/".$myArray[0].".gif'>";
echo " <img src='images/little/".$myArray[1].".gif'>";
echo " <img src='images/little/".$myArray[2].".gif'>";
echo " <img src='images/little/".$myArray[3].".gif'>";
echo " <img src='images/little/".$myArray[4].".gif'>";
echo "<BR><BR><img src='images/little/".$myArray[5].".gif'>";
echo " <img src='images/little/".$myArray[6].".gif'>";
echo " <img src='images/little/".$myArray[7].".gif'>";
echo " <img src='images/little/".$myArray[8].".gif'>";
echo " <img src='images/little/".$myArray[9].".gif'>";
echo "<BR><BR><img src='images/little/".$myArray[10].".gif'>";
echo " <img src='images/little/".$myArray[11].".gif'>";
echo " <img src='images/little/".$myArray[12].".gif'>";
echo " <img src='images/little/".$myArray[13].".gif'>";
echo " <img src='images/little/".$myArray[14].".gif'>";
echo "<BR><BR><img src='images/little/".$myArray[15].".gif'>";
echo " <img src='images/little/".$myArray[16].".gif'>";
echo " <img src='images/little/".$myArray[17].".gif'>";
echo " <img src='images/little/".$myArray[18].".gif'>";
echo " <img src='images/little/".$myArray[19].".gif'>";
}

?>
</TD>
<TD width='27%' align='center' valign='top'>
<?php
if (($inc == 1) || ($inc == 2)){
include('cal2.php');
}elseif (($inc == 3) || ($inc == 'moe') || ($inc == 'cal') || ($inc == 'hob') || ($inc == 'par') || ($inc == 'sus') || ($inc == 'worm') || ($inc == 'ros')){
include('meet.php');
}else{
}
?>
</TD>
</TR>
</CENTER>
</TABLE>
<DIV id=dwindow style="DISPLAY: none; LEFT: 100px; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px">
<DIV id=displaydiv style="BORDER-RIGHT: #999 1px solid; BORDER-TOP: #999 1px solid; Z-INDEX: 2; LEFT: 15px; BORDER-LEFT: #999 1px solid; WIDTH: 100px; BORDER-BOTTOM: #999 1px solid; POSITION: absolute; TOP: 15px; HEIGHT: 100px; BACKGROUND-COLOR: #383838"></DIV>
<IFRAME id=cframe style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; LEFT: 0px; BORDER-LEFT: 0px; WIDTH: 0px; BORDER-BOTTOM: 0px; POSITION: relative; TOP: 0px; HEIGHT: 0px" name=cframe src="about:blank" frameBorder=0 scrolling=no></IFRAME>
<DIV onmousedown=initializedrag(event) id=dbar style="BORDER-RIGHT: #ccc 1px dashed; PADDING-RIGHT: 0px; BORDER-TOP: #ccc 1px dashed; PADDING-LEFT: 0px; Z-INDEX: 1; LEFT: 0px; PADDING-BOTTOM: 0px; BORDER-LEFT: #ccc 1px dashed; WIDTH: 100%; CURSOR: move; PADDING-TOP: 0px; BORDER-BOTTOM: #ccc 1px dashed; POSITION: absolute; TOP: 0px; HEIGHT: 32px; BACKGROUND-COLOR: #383838">
<DIV style="FONT-SIZE: 8px; LEFT: 5px; COLOR: #999; POSITION: absolute; TOP: -1px; font-type: Trebuchet MS">::</DIV>
<DIV id=loaderbar style="FONT-SIZE: 8px; LEFT: 13px; COLOR: #999; POSITION: absolute; TOP: -1px; font-type: Trebuchet MS">|</DIV>
<DIV style="PADDING-RIGHT: 5px; PADDING-LEFT: 5px; FONT-SIZE: 10px; RIGHT: 0px; PADDING-BOTTOM: 5px; CURSOR: pointer; COLOR: #999; PADDING-TOP: 5px; POSITION: absolute; TOP: -5px; TEXT-ALIGN: right; font-type: Trebuchet MS" onclick=closeit()>x</DIV></DIV>
<DIV id=saver style="DISPLAY: none; LEFT: 0px; WIDTH: 0px; POSITION: absolute; TOP: 0px; HEIGHT: 0px"></DIV></DIV>
</BODY>
