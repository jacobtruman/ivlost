<HEAD>
<Title>
    Reports
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='style.css'>
</HEAD>
<body>
<BR>
<?php
include ('propquery.php');
?>
<table border='0' cellpadding='0' cellspacing='0' align='center'>
	<tr>
		<td valign='top'>
			<form name='dailyform' action='syslogquery.php' method='POST' target='report'>
				<input type='hidden' name='prop_ip' value='<?php echo $prop_ip;?>'>
				<input type='hidden' name='rtype' value='daily'>
				<input type='submit' name='submit' value='Daily' class='textbutton'>
			</form>
		</td>
		<td valign='top'>
			|
		</td>
		<td valign='top'>
			<form name='weeklyform' action='syslogquery.php' method='POST' target='report'>
				<input type='hidden' name='prop_ip' value='<?php echo $prop_ip;?>'>
				<input type='hidden' name='rtype' value='weekly'>
				<input type='submit' name='submit' value='Weekly' class='textbutton'>
			</form>
		</td>
		<td valign='top'>
			|
		</td>
		<td valign='top'>
			<form name='monthlyform' action='syslogquery.php' method='POST' target='report'>
				<input type='hidden' name='prop_ip' value='<?php echo $prop_ip;?>'>
				<input type='hidden' name='rtype' value='monthly'>
				<input type='submit' name='submit' value='Monthly' class='textbutton'>
			</form>
		</td>
		<td valign='top'>
			|
		</td>
		<td valign='top'>
			<form name='customform' action='syslogquery.php' method='POST' target='report'>
				<input type='hidden' name='prop_ip' value='<?php echo $prop_ip;?>'>
				<input type='hidden' name='rtype' value='custom'>
				<input type='submit' name='submit' value='Custom' class='textbutton'>
			</form>
		</td>
	</tr>
</table>
<IFRAME WIDTH='100%' HEIGHT='100%' NAME='report' frameborder='0'>
</IFRAME>
</body>