<?php
$ptype = 'Contact Information';
$root = 'D:/inetpub/support';
include($root.'/support_web/Components/header.php');

$db = $root.'/support_web/fpdb/propinfo.mdb';
$conn = new COM('ADODB.Connection');
$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db");


$sql = "SELECT * FROM contact where (prop = '".$prop."')";
$res = $conn->Execute($sql);

$parr = array('contact', 'email', 'staddr', 'csz', 'cphone', 'phone', 'fax', 'contact2', 'email2', 'cphone2');
$tarr = array('Property Contact', 'Contact E-mail', 'Address', 'City, State Zip', 'Contact Phone', 'Front Desk', 'Fax', 'Second Contact', 'Second Contact E-mail', 'Second Contact Phone');

$parrcnt = count($parr);
$i = 0;
$prop = $res->Fields['prop']->Value;
while ($i < $parrcnt){
	$$parr[$i] = $res->Fields["$parr[$i]"]->Value;
$i++;
}

$res->Close();
$conn->Close();
$res = null;
$conn = null;

?>

<br>
<table border='0' width='100%'>
<?php
$i = 0;

while ($i < $parrcnt){

if (isset($$parr[$i])){
	echo "<tr>";
	echo "<td width='18%'>";
	echo "<font size='2' face='Verdana'>";
	echo "<B>";
	if ($parr[$i] == 'csz'){
	}else{
		echo $tarr[$i].":";
	}
	echo "</B>";
	echo "</font>";
	echo "</td>";
	echo "<td width='82%'>";
	echo "<font size='2' face='Verdana' color='#000000'>";
	if ($parr[$i] == 'email'){
		echo "<a href='mailto:".$$parr[$i]."'>".$$parr[$i].'</a>';
	}else if ($parr[$i] == 'contact2'){
		echo '<BR><BR>';
		echo $$parr[$i];
	}else{
		echo $$parr[$i];
	}
	echo "</font>";
	echo "</td>";
	echo "</tr>";
}
$i++;
}

?>
</table>
</td>
</tr>
<tr>
<td valign='bottom'>
<?php
include($root.'/support_web/Components/footer.php');
?>
</td>
</tr>
</table>
</body>

