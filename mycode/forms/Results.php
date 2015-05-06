<?php
$ptype = 'Property Search Page';
$root = 'D:/inetpub/support';
include($root.'/support_web/components/searchheader.php');


$db = $root.'/support_web/fpdb/propinfo.mdb';
$conn = new COM('ADODB.Connection');
$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db");

if ($shtype == ''){
	$shtype = '..';
}
if ($name == ''){
	$name = '..';
}
if ($phone == ''){
	$phone = '..';
}

if ($phone != '..'){
	$sql = "SELECT * FROM prop WHERE (prop = (select prop from contact where (phone = '".$phone."')))";
	$res = $conn->Execute($sql);
	$i = 0;
	while (!$res->EOF){
		$i++;
		$res->MoveNext();
	}
	if ($i == 0){
		if (($shtype != '..') && ($name != '..')){
			$sql = "SELECT * FROM prop WHERE (htype LIKE '%".$shtype."%') AND (name LIKE '%".$name."%')";
			$res = $conn->Execute($sql);
		}else{
			$sql = "SELECT * FROM prop WHERE (htype LIKE '%".$shtype."%') OR (name LIKE '%".$name."%')";
			$res = $conn->Execute($sql);
		}
	}else{
	$res = $conn->Execute($sql);
	}
}else if (($shtype != '..') && ($name != '..')){
	$sql = "SELECT * FROM prop WHERE (htype LIKE '%".$shtype."%') AND (name LIKE '%".$name."%')";
	$res = $conn->Execute($sql);
}else{
	$sql = "SELECT * FROM prop WHERE (htype LIKE '%".$shtype."%') OR (name LIKE '%".$name."%')";
	$res = $conn->Execute($sql);

}
?>
<BR>
<BR>
<table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
      <thead>
        <tr>
          <td><b>CTYHO</b></td>
		  <td><b>Property Type</b></td>
          <td><b>Property Name</b></td>
		  <td><b>Notes</b></td>
		  <td><b>1st Level</b></td>
		  <td><b>2nd Level</b></td>
		  <td><b>Contact Info</b></td>
		  <td><b>Property Overview</b></td>
		  <td><b>IP Info</b></td>
        </tr>
      </thead>
<tbody>
<form name='blank' method='POST'>
</form>
<?php
if (!isset($res)){
}else{
	while (!$res->EOF){
		$prop = $res->Fields['prop']->Value;
		$htype = $res->Fields['htype']->Value;
		$name = $res->Fields['name']->Value;
		$notes = $res->Fields['notes']->Value;
		$level1 = $res->Fields['level1']->Value;
		$level2 = $res->Fields['level2']->Value;
		
		echo "<tr><td>\n";
		echo $prop;
		echo "</td><td>\n";
		echo $htype;
		echo "</td><td>\n";
		echo $name;
		echo "</td><td>\n";
		if (isset($notes)){
			echo "<form name='notes".$prop."' method='POST' action='/support_web/forms/notes2.php' target='_blank'>\n";
			echo "<input type='hidden' name='prop' value='".$prop."'>\n";
			echo "<input type='submit' name='submit' value='Notes' class='textbutton' style='color: #A000BD'>\n";
			echo "</form>\n";
		}else{
			echo "<font size='2' face='Verdana' color='#C0C0C0'>";
			echo "No Notes</font>\n";
		}
		if ($level1 == 'Yes'){
			echo "</td><td>\n";
			echo "<form name='form1".$prop."' method='POST' action='/support_web/forms/NetworkMap.php' target='_blank'>\n";
			echo "<input type='hidden' name='prop' value='".$prop."'>\n";
			echo "<input type='hidden' name='lvl' value='1'>\n";
			echo "<input type='submit' name='submit' value='Level 1' class='textbutton' style='color: #FF0000'>";
			echo "</form>\n";
		}else{
		echo "</td><td>\n";
			echo "<font size='2' face='Verdana' color='#C0C0C0'>\n";
			echo "No 1st Level</font>\n";
		}
		if ($level2 == 'Yes'){
			echo "</td><td>\n";
			echo "<form name='form2".$prop."' method='POST' action='/support_web/2ndlevel/forms/NetworkMap.php' target='_blank'>\n";
			echo "<input type='hidden' name='prop' value='".$prop."'>\n";
			echo "<input type='hidden' name='lvl' value='2'>\n";
			echo "<input type='submit' name='submit' value='Level 2' class='textbutton' style='color: #0000FF'>";
			echo "</form>\n";
		}else{
			echo "</td><td>\n";
			echo "<font size='2' face='Verdana' color='#C0C0C0'>\n";
			echo "No 2nd Level</font>\n";
		}
		echo "</td><td>\n";
		
		echo "<form name='contactform".$prop."' method='POST' action='/support_web/forms/ContactInformation.php' target='_blank'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='Contact Info' class='textbutton' style='color: green'>";
		echo "</form>\n";
		echo "</td><td>\n";
		
		echo "<form name='overform".$prop."' method='POST' action='/support_web/forms/PropertyOverview.php' target='_blank'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='Overview' class='textbutton' style='color: green'>";
		echo "</form>\n";
		echo "</td><td>\n";
		
		echo "<form name='ipform".$prop."' method='POST' action='/support_web/forms/IPInformation.php' target='_blank'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='IP Info' class='textbutton' style='color: green'>";
		echo "</form>\n";
		echo "</td></tr>\n";
		
	$res->MoveNext();
	}
$res->Close();
$conn->Close();
$res = null;
$conn = null;
}
echo '</tbody></table><BR></table></table></body>';
?>
<!-- Created/Modified by Jacob Truman -->