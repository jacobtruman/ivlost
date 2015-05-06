<HEAD>
	<TITLE>
		Index
	</TITLE>
	<base target='main'>
</HEAD>
<LINK Rel='stylesheet' Type='text/css' HREF='style.css'>
<?php
include ('propquery.php');

$nlgn = strtolower($ctyho);
$npswd = $pswd;
?>
<BODY class='menubar'>
	<TABLE id=AutoNumber2 style='BORDER-COLLAPSE: collapse' cellSpacing='0' cellPadding='0' width='118' border='0'>
		<TBODY>
			<TR>
				<TD align='middle' width='116' bgColor='#ffffff'>
					<A href='/dnnoc/' target='_parent'>
						<IMG height='116' src='images/picindex.jpg' width='116' border='0'>
					</A>
					<BR>
				</TD>
			</TR>
			<TR>
				<TD align='middle' width='116' bgColor='#ffffff' align='center'>
					<form name='mianform' method='POST' action='bottom.php' target='bot'>
						<input type='hidden' name='ctyho' value='<?php echo $ctyho;?>'>
						<input type='submit' name='Main' value='Main' class='textbutton' style='color:#000000'>
					</form>
				<td>
			</tr>
			<TR>
				<TD align='middle' width='116' bgColor='#ffffff' align='center'>
					<form name='reportform' method='POST' action='reports.php' target='bot'>
						<input type='hidden' name='ctyho' value='<?php echo $ctyho;?>'>
						<input type='submit' name='MyReports' value='MyReports' class='textbutton' style='color:#000000'>
					</form>
				<td>
			</tr>
			<tr>
				<TD align='middle' width='116' bgColor='#ffffff' align='center'>
					<form name='myform' method='POST' action='http://<?php echo $nlgn;?>:<?php echo $npswd;?>@208.13.140.137:8080' target='bot'>
						<input type='submit' name='MyNetwork' value='MyNetwork' class='textbutton' style='color:#000000'>
					</form>
				</TD>
			</TR>
		</TBODY>
	</TABLE>
</BODY>