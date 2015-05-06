<?php
$ptype = "Property Overview";
$root = "D:/inetpub/support";
include($root."/support_web/Components/header.php");

$db = $root.'/support_web/fpdb/propinfo.mdb';
$conn = new COM('ADODB.Connection');
$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db");


$sql = "SELECT * FROM overview where (prop = '".$prop."')";
$res = $conn->Execute($sql);

$parr = array('gateway', 'ctype', 'cpegad', 'cpetype', 'bill', 'price', 'bmethod', 'smtp', 'vpn', 'vlans', 'print', 'ssid', 'wireless', 'areas', 'slevel');
$tarr = array('Gateway', 'Connection Type', 'CPE in Room', 'CPE Type', 'Billing', 'Price', 'Billing Method', 'SMTP Supported', 'VPN Supported', 'VLANs', 'Printing Supported', 'SSID', 'Wireless', 'Supported Areas', 'Support Level(s)');

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

	if ($cpetype == "Gigalink"){
		$cpegadlnk = 'CPEType1.php';
	}elseif ($cpetype == "Cygnet"){
		$cpegadlnk = 'CPEType2.php';
	}elseif ($cpetype == "Cisco575"){
		$cpegadlnk = 'CPEType3.php';
	}elseif ($cpetype == "Cisco585"){
		$cpegadlnk = 'CPEType4.php';
	}elseif ($cpetype == "Netopia"){
		$cpegadlnk = 'CPEType5.php';
	}elseif ($cpetype == "Paradyne"){
		$cpegadlnk = 'CPEType6.php';
	}elseif ($cpetype == "Elastic"){
		$cpegadlnk = 'CPEType7.php';
	}elseif ($cpetype == "Turbocomm"){
		$cpegadlnk = 'CPEType8.php';
	}else{
	}
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
	echo $tarr[$i];
	echo "</font>";
	echo "</td>";
	echo "<td width='82%'>";
	echo "<font size='2' face='Verdana' color='#FF0000'>";
	if ($parr[$i] == 'cpetype'){
		echo "<a href='/support_web/1stlevel/HowTo/".$cpegadlnk."' target='_blank'>".$$parr[$i].'</a>';
	}else if (strstr($$parr[$i], 'WET11')){
		echo "<a href='/support_web/1stlevel/HowTo/GADType1.php' target='_blank'>".$$parr[$i]."</a>";
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
<!-- Created/Modified by Jacob Truman -->