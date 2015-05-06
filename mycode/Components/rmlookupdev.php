<?php
$db = $root.'/support_web/fpdb/HISA Properties.mdb';
$conn = new COM('ADODB.Connection');
$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db");

if (isset($_POST['room'])){
$room = $_POST['room'];
}else{
$room = '';
}
if ($room == ''){
	$sql = "SELECT * FROM ".$dbname." where (Room LIKE '%..%')";
}else{
	$sql = "SELECT * FROM ".$dbname." where (Room LIKE '%".$room."%')";
}
$res = $conn->Execute($sql);

?>
	<form METHOD='POST' ACTION='NetworkMapdev.php'>
	<input type='hidden' name='prop' value='<?php echo $prop;?>'>
	<input type='hidden' name='lvl' value='<?php echo $lvl;?>'>
		<table width='90%' border='0' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
			<tr>
				<td>
					<font color='#FF0000'>
						<b>
							Room Lookup
						</b>
					</font>
				</td>
			</tr>
			<tr>
				<td>
					<b>
						Room
					</b>
					<input TYPE='TEXT' NAME='room' VALUE='<?php echo $room;?>' size='20' class='formfield'>
				</td>
			</tr>
			<tr>
				<td>
					<input TYPE='Submit' class='formbutton'>
					<input TYPE='Reset' class='formbutton'>
				</td>
			</tr>
		</table>
	</form>
<?php

if (!isset($res)){
}else{
$fieldcnt = $res->Fields->Count;
	echo "<table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>";
	echo "<thead>";
	echo "<tr>";
	for($i = 0; $i < $fieldcnt; $i++){
		$fieldn[$i] = $res->Fields[$i]->Name;
			if (($fieldn[$i] == 'cport') || ($fieldn[$i] == 'ctype') || ($fieldn[$i] == 'gtway')){
			}else{
				echo "<td>";
				echo "<b>";
				echo $fieldn[$i];
				echo "</b>";
				echo "</td>";
			}
	}
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while (!$res->EOF){
		echo '<tr>';
		for($i = 0; $i < $fieldcnt; $i++){
			$fieldn[$i] = $res->Fields[$i]->Name;
			$fieldv[$i] = $res->Fields[$fieldn[$i]]->Value;
			if ($fieldn[$i] == 'cport'){
				$cport = $fieldv[$i];
			}
			if ($fieldn[$i] == 'ctype'){
				$ctype = $fieldv[$i];
			}
			if ($fieldn[$i] == 'gtway'){
				$gtway = $fieldv[$i];
			}
		}
		for($i = 0; $i < $fieldcnt; $i++){
			$fieldn[$i] = $res->Fields[$i]->Name;
			$fieldv[$i] = $res->Fields[$fieldn[$i]]->Value;
			if (($fieldn[$i] == 'cport') || ($fieldn[$i] == 'ctype') || ($fieldn[$i] == 'gtway')){
			}else{
				if ((strstr($fieldn[$i], 'IP')) && (isset($ctype))){
					if ($ctype == 'web'){
						if (isset($cport)){
							if ($lvl == '1'){
								$lnkstr = '<td>'.$fieldv[$i].'</td>';
							}else{
								$lnkstr = '<td><a href="http://'.$lgn.':'.$pswd.'@'.$gtway.':'.$cport.'">'.$fieldv[$i].'</a></td>';
							}
						}else{
							if ($lvl == '1'){
								$lnkstr = '<td><a href="/support_web/ping.php?theaddr='.$fieldv[$i].'" target="_blank">'.$fieldv[$i].'</a></td>';
							}else{
								$lnkstr = '<td><a href="http://'.$lgn.':'.$pswd.'@'.$fieldv[$i].'">'.$fieldv[$i].'</a></td>';
							}
						}
					}else if ($ctype == 'telnet'){
						if (isset($cport)){
							if ($lvl == '1'){
								$lnkstr = '<td>'.$fieldv[$i].'</td>';
							}else{
								$lnkstr = '<td><a href="telnet:'.$gtway.':'.$cport.'">'.$fieldv[$i].'</a></td>';
							}
						}else{
							if ($lvl == '1'){
								$lnkstr = '<td><a href="/support_web/ping.php?theaddr='.$fieldv[$i].'" target="_blank">'.$fieldv[$i].'</a></td>';
							}else{
								$lnkstr = '<td><a href="telnet:'.$fieldv[$i].'">'.$fieldv[$i].'</a></td>';
							}
						}
					}
					echo $lnkstr;
				}else{
					if ($lvl == '1'){
						if (strstr($fieldv[$i], 'href')){
							$lnkstr = '<td>..</td>';
						}else{
							$lnkstr = '<td>'.$fieldv[$i].'</td>';
						}
					}else{
						$lnkstr = '<td>'.$fieldv[$i].'</td>';
					}
					echo $lnkstr;
				}
			}
		}
		echo '</tr>';
		$res->MoveNext();
	}
$res->Close();
$conn->Close();
$res = null;
$conn = null;
echo '<tbody>';
echo '</table>';
}

?>