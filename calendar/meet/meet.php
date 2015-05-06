<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include($root."/include.php");

if ($inc == 'cal'){
$conf = 'one';
$img = 'images/meet/calvin.gif';
$text = 'meet/cal.php';
}elseif ($inc == 'hob'){
$conf = 'two';
$img = 'images/meet/hobbes.gif';
$text = 'meet/hob.php';
}elseif ($inc == 'par'){
$conf = 'one';
$img = 'images/meet/parents.gif';
$text = 'meet/par.php';
}elseif ($inc == 'sus'){
$conf = 'two';
$img = 'images/meet/susie.gif';
$text = 'meet/sus.php';
}elseif ($inc == 'worm'){
$conf = 'one';
$img = 'images/meet/wormwood.gif';
$text = 'meet/worm.php';
}elseif ($inc == 'ros'){
$conf = 'two';
$img = 'images/meet/rosalyn.gif';
$text = 'meet/ros.php';
}elseif ($inc == 'moe'){
$conf = 'one';
$img = 'images/meet/moe.gif';
$text = 'meet/moe.php';
}
?>
<BR>
<BR>
<DIV CLASS='meet'>
<?php
if ($conf == 'one'){
echo "<B>".$char."</B><BR><BR>";
include ($text);
echo "<BR><BR><img src='".$img."' border='0'>";
}elseif ($conf == 'two'){
echo "<B>".$char."</B><BR><BR>";
echo "<img src='".$img."' border='0'><BR><BR>";
include ($text);
}
?>
</DIV>