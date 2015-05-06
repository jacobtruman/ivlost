<?php
$ptype = "IP Information";
$root = "D:/inetpub/support";
include($root."/support_web/Components/header.php");

$db = $root.'/support_web/fpdb/propinfo.mdb';
$conn = new COM('ADODB.Connection');
$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db");


$sql = "SELECT * FROM ipscope where (prop = '".$prop."')";
$res = $conn->Execute($sql);

$prop = $res->Fields['prop']->Value;

$parr = array('privtitle', 'pubtitle', 'privb', 'prive', 'pubb', 'pube', 'privmask', 'pubmask', 'privgate', 'pubgate', 'privdns1', 'pubdns1', 'privdns2', 'pubdns2', 'privdns3', 'pubdns3', 'priv2title', 'pub2title', 'priv2b', 'priv2e', 'pub2b', 'pub2e', 'priv2mask', 'pub2mask', 'priv2gate', 'pub2gate', 'priv2dns1', 'pub2dns1', 'priv2dns2', 'pub2dns2', 'priv2dns3', 'pub2dns3');
//$tarr = array('Private:', 'Public:', 'Private Begin', 'Private End', 'Public Begin', 'Public End', 'Subnet', 'Subnet', 'Gateway', 'Gateway', 'DNS 1', 'DNS 1', 'DNS 2', 'DNS 2', 'DNS 3', 'DNS 3');

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
				<table border='0' width='90%' align='center'>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
								<center>
									<B>
<?php
if ((isset($privtitle)) && (isset($privb))){
	echo $privtitle;
}
?>
									</B>
								</center>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
								<center>
									<B>
<?php
if ((isset($pubtitle)) && (isset($pubb))){
	echo $pubtitle;
}
?>
									</B>
								</center>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if (isset($privb)){
	echo 'IP Range: '.$privb.' thru '.$prive;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if (isset($pubb)){
	echo 'IP Range: '.$pubb.' thru '.$pube;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($privmask)) && (isset($privb))){
	echo 'Subnet Mask: '.$privmask;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($pubmask)) && (isset($pubb))){
	echo 'Subnet Mask: '.$pubmask;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($privgate)) && (isset($privb))){
	echo 'Gateway: '.$privgate;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($pubgate)) && (isset($pubb))){
	echo 'Gateway: '.$pubgate;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($privdns1)) && (isset($privb))){
	echo 'Primary DNS: '.$privdns1;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($pubdns1)) && (isset($pubb))){
	echo 'Primary DNS: '.$pubdns1;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($privdns2)) && (isset($privb))){
	echo 'Secondary DNS: '.$privdns2;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($pubdns2)) && (isset($pubb))){
	echo 'Secondary DNS: '.$pubdns2;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($privdns3)) && (isset($privb))){
	echo 'Tertiary DNS: '.$privdns3;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($pubdns3)) && (isset($pubb))){
	echo 'Tertiary DNS: '.$pubdns3;
}
?>
							</font>
						</td>
					</tr>
					<TR>
						<TD ALIGN='right'>
							<BR>
						</TD>
						<TD>
							<BR>
						</TD>
						<TD ALIGN='right'>
							<BR>
						</TD>
						<TD>
							<BR>
						</TD>
					</TR>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
								<center>
									<B>
<?php
if ((isset($priv2title)) && (isset($priv2b))){
	echo $priv2title;
}
?>
									</B>
								</center>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
								<center>
									<B>
<?php
if ((isset($pub2title)) && (isset($pub2b))){
	echo $pub2title;
}
?>
									</B>
								</center>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if (isset($priv2b)){
	echo 'IP Range: '.$priv2b.' thru '.$priv2e;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if (isset($pub2b)){
	echo 'IP Range: '.$pub2b.' thru '.$pub2e;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($priv2mask)) && (isset($priv2b))){
	echo 'Subnet Mask: '.$priv2mask;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($pub2mask)) && (isset($pub2b))){
	echo 'Subnet Mask: '.$pub2mask;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($priv2gate)) && (isset($priv2b))){
	echo 'Gateway: '.$priv2gate;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($pub2gate)) && (isset($pub2b))){
	echo 'Gateway: '.$pub2gate;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($priv2dns1)) && (isset($priv2b))){
	echo 'Primary DNS: '.$priv2dns1;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($pub2dns1)) && (isset($pub2b))){
	echo 'Primary DNS: '.$pub2dns1;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($priv2dns2)) && (isset($priv2b))){
	echo 'Secondary DNS: '.$priv2dns2;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($pub2dns2)) && (isset($pub2b))){
	echo 'Secondary DNS: '.$pub2dns2;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($priv2dns3)) && (isset($priv2b))){
	echo 'Tertiary DNS: '.$priv2dns3;
}
?>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
<?php
if ((isset($pub2dns3)) && (isset($pub2b))){
	echo 'Tertiary DNS: '.$pub2dns3;
}
?>
							</font>
						</td>
					</tr>
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