<HEAD>
<Title>
    Syslog Search
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='style.css'>
</HEAD>
<script language='JavaScript' src='calendar/pupdate.js'></script>
<BR>
<table border='0' bordercolor='#C0C0C0' cellpadding='0' cellspacing='3' width='90%' align='center'>
<?php 
include ('../../gsyslog.php');

$mnth = Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$prop_ip = $_POST['prop_ip'];
$rtype = $_POST['rtype'];
$date = getdate();

$connection = mysql_connect ($hostname,$username,$password)
or die ("Unable to connect to MySQL server.");
mysql_select_db ($databasename,$connection)
or die ("Unable to select the database.");

if ($rtype == 'daily'){
	echo '<tr><td align="center" colspan="3"><B>Daily Report<BR><BR></B></td></tr>';
	for ($m = 0; $m <= 7; $m++){

		$date[$m] = getdate(time()-86400*$m);
		$year = $date[$m]['year'];
		$mon = $date[$m]['mon'];
		$mday = $date[$m]['mday'];
		$bdate = $year.'-'.$mon.'-'.$mday;
		$sql = "SELECT DISTINCT message FROM syslogTB where (message LIKE '%Added_by_xml_command%') AND (host = '".$prop_ip."') AND (date = '".$bdate."')";
		$sql_result = mysql_query($sql,$connection)
		or die(mysql_errno() . ": " . mysql_error(). "\n");  

		$j = 0;
		while ($row = mysql_fetch_array($sql_result)){
			$message = trim($row["message"]);
			$msg = preg_split('/ /', $message, -1, PREG_SPLIT_OFFSET_CAPTURE);
			$i = 0;
			for($i = 0; $i < count($msg); $i++){
				if ($msg[$i] == 'Added_by_xml_command'){
					$myarr[$j] =  $msg[$i + 1];
					$j++;
				}else{
				}
			}
		}
		$cnt = $j * 3;
		$pdate = $date[$m]['weekday'].' '.$date[$m]['month']." ".$date[$m]['mday']." ".$date[$m]['year'];
		echo "<tr><td align='right' width='25%'><font color='#0000FF'>".$pdate."</font></td><td width='5%'><BR></td><td nowrap bgcolor='#C0C0C0' width='50%'><img src='images/green.png' width='".$cnt."' height='20' align='absmiddle'><B>".$cnt."</B></td></tr>";
	}


}else if ($rtype == 'weekly'){
	echo '<tr><td align="center" colspan="3"><B>Weekly Report<BR><BR></B></td></tr>';

	$date[$m] = getdate(time());
	$year = $date[$m]['year'];
	$mon = $date[$m]['mon'];
	$mday = $date[$m]['mday'];
	$wday = $date[$m]['wday'];
	$edate = $year.'-'.$mon.'-'.$mday;
	$m = 0;
	while ($m <= 50){

		if ($m == 0){
			$bdif = $wday;
			$edif = 0;
			if($wday == 0){
				$m++;
			}else{
				$m = $m + $wday;
			}
		}else{
			$bdif = $m + 7;
			$edif = $m + 1;
			$m = $m + 7;
		}

		$date[$m] =  getdate(time()-86400*$bdif);
		$year = $date[$m]['year'];
		$mon = $date[$m]['mon'];
		$mday = $date[$m]['mday'];
		$wday = $date[$m]['wday'];
		$bdate = $year.'-'.$mon.'-'.$mday;

		$date2[$m] = getdate(time()-86400*$edif);
		$eyear = $date2[$m]['year'];
		$emon = $date2[$m]['mon'];
		$emday = $date2[$m]['mday'];
		$edate = $eyear.'-'.$emon.'-'.$emday;

		$sql = "SELECT DISTINCT message FROM syslogTB where (message LIKE '%Added_by_xml_command%') AND (host = '".$prop_ip."') AND (date BETWEEN '".$bdate."' AND '".$edate."')";
		$sql_result = mysql_query($sql,$connection)
		or die(mysql_errno() . ": " . mysql_error(). "\n");

		$j = 0;
		while ($row = mysql_fetch_array($sql_result)){
			$message = trim($row["message"]);
			$msg = preg_split('/ /', $message, -1, PREG_SPLIT_OFFSET_CAPTURE);
			$i = 0;
			for($i = 0; $i < count($msg); $i++){
				if ($msg[$i] == 'Added_by_xml_command'){
					$myarr[$j] =  $msg[$i + 1];
					$j++;
				}else{
				}
			}
		}
		$cnt = $j * 2;
		$pdate = $date[$m]['month']." ".$date[$m]['mday']." ".$date[$m]['year'].' - '.$date2[$m]['month']." ".$date2[$m]['mday']." ".$date2[$m]['year'];;
		echo "<tr><td align='right' width='25%'><font color='#0000FF'>".$pdate."</font></td><td width='5%'><BR></td><td nowrap bgcolor='#C0C0C0' width='50%'><img src='images/green.png' width='".$cnt."' height='20' align='absmiddle'><B>".$cnt."</B></td></tr>";
	}



}else if ($rtype == 'monthly'){
	echo '<tr><td align="center" colspan="3"><B>Monthly Report<BR><BR></B></td></tr>';
	$date[$m] = getdate(time());
	$year = $date[$m]['year'];
	$mon = $date[$m]['mon'];
	$mday = $date[$m]['mday'];

	for ($m = 0; $m < 12; $m++){
		$cmon = $mon - $m;
		$bdate = $year.'-'.$cmon.'-01';
		$edate = $year.'-'.$cmon.'-31';
		$sql = "SELECT DISTINCT message FROM syslogTB where (message LIKE '%Added_by_xml_command%') AND (host = '".$prop_ip."') AND (date BETWEEN '".$bdate."' AND '".$edate."')";
		$sql_result = mysql_query($sql,$connection)
		or die(mysql_errno() . ": " . mysql_error(). "\n");  

		$j = 0;
		while ($row = mysql_fetch_array($sql_result)){
			$message = trim($row["message"]);
			$msg = preg_split('/ /', $message, -1, PREG_SPLIT_OFFSET_CAPTURE);
			$i = 0;
			for($i = 0; $i < count($msg); $i++){
				if ($msg[$i] == 'Added_by_xml_command'){
					$myarr[$j] =  $msg[$i + 1];
					$j++;
				}else{
				}
			}
		}
		$cnt = $j;
		$mon = $mon - 1;
		$year = $year;
		$pdate = $mnth[$mon]." ".$year;
		if ($mon == '0'){
			$mon = '12';
			$year = $year - 1;
		}
		echo "<tr><td align='right' width='25%'><font color='#0000FF'>".$pdate."</font></td><td width='5%'><BR></td><td nowrap bgcolor='#C0C0C0' width='50%'><img src='images/green.png' width='".$cnt."' height='20' align='absmiddle'><B>".$cnt."</B></td></tr>";
	}



}else if ($rtype == 'custom'){
	echo "<form name='formname' action='syslogquery.php' method='POST' target='report'>";
	echo "<INPUT TYPE='hidden' NAME='rtype' VALUE='custom' SIZE='25' CLASS='formfield'>";
	echo "<INPUT TYPE='hidden' NAME='prop_ip' VALUE='".$prop_ip."' SIZE='25' CLASS='formfield'>";
	echo '<TR><TD colspan="2"><b>Beginning Date</b></TD><TD>';
	echo "<INPUT NAME='bdate' VALUE='' SIZE='25' CLASS='formfield'>";
	echo "<img src='calendar/calendar.gif' onMouseUp='getCalendarFor(document.formname.bdate)' class='cal_hand' align='absbottom'>";
	echo '</TD></TR>';
	echo '<TR><TD colspan="2"><b>Ending Date</b></TD><TD>';
	echo "<INPUT NAME='edate' VALUE='' SIZE='25' CLASS='formfield'>";
	echo "<img src='calendar/calendar.gif' onMouseUp='getCalendarFor(document.formname.edate)' class='cal_hand' align='absbottom'>";
	echo '</TD></TR>';
	echo '<TR><TD colspan="3" align="center">';
	echo "<INPUT TYPE='submit' NAME='submit' VALUE='submit' SIZE='25' CLASS='formbutton'>";
	echo '</TD></TR></form>';
	echo '<tr><td align="center" colspan="3"><B>Custom Report<BR><BR></B></td></tr>';
	$bdate = $_POST['bdate'];
	$edate = $_POST['edate'];
	if (isset($bdate)){
		$sql = "SELECT DISTINCT message FROM syslogTB where (message LIKE '%Added_by_xml_command%') AND (host = '".$prop_ip."') AND (date BETWEEN '".$bdate."' AND '".$edate."')";
		$sql_result = mysql_query($sql,$connection)
		or die(mysql_errno() . ": " . mysql_error(). "\n");  

		$j = 0;
		while ($row = mysql_fetch_array($sql_result)){
			$message = trim($row["message"]);
			$msg = preg_split('/ /', $message, -1, PREG_SPLIT_OFFSET_CAPTURE);
			$i = 0;
			for($i = 0; $i < count($msg); $i++){
				if ($msg[$i] == 'Added_by_xml_command'){
					$myarr[$j] =  $msg[$i + 1];
					$j++;
				}else{
				}
			}
		}
		$cnt = $j;

		$pbyear = (int)($bdate{0}.$bdate{1}.$bdate{2}.$bdate{3});
		$pbmon = (int)( $bdate{5}.$bdate{6}) - 1;
		$pbday = (int)($bdate{8}.$bdate{9});

		$peyear = ($edate{0}.$edate{1}.$edate{2}.$edate{3});
		$pemon = (int)($edate{5}.$edate{6}) - 1;
		$peday = (int)($edate{8}.$edate{9});

		$pdate = $mnth[$pbmon].' '.$pbday.' '.$pbyear.' - '.$mnth[$pemon].' '.$peday.' '.$peyear;
		echo "<tr><td align='right'><font color='#0000FF'>".$pdate."</font></td><td width='5%'><BR></td><td nowrap bgcolor='#C0C0C0' width='50%'><img src='images/green.png' width='".$cnt."' height='20' align='absmiddle'><B>".$cnt."</B></td></tr>";
	}
}
?>
</table>
<script language="JavaScript">
if (document.all) {
 document.writeln("<div id=\"PopUpCalendar\" style=\"position:absolute; left:0px; top:0px; z-index:7; width:200px; height:77px; overflow: visible; visibility: hidden; background-color: #FFFFFF; border: 1px none #000000\" onMouseOver=\"if(ppcTI){clearTimeout(ppcTI);ppcTI=false;}\" onMouseOut=\"ppcTI=setTimeout(\'hideCalendar()\',500)\">");
 document.writeln("<div id=\"monthSelector\" style=\"position:absolute; left:0px; top:0px; z-index:9; width:181px; height:27px; overflow: visible; visibility:inherit\">");}
else if (document.layers) {
 document.writeln("<layer id=\"PopUpCalendar\" pagex=\"0\" pagey=\"0\" width=\"200\" height=\"200\" z-index=\"100\" visibility=\"hide\" bgcolor=\"#FFFFFF\" onMouseOver=\"if(ppcTI){clearTimeout(ppcTI);ppcTI=false;}\" onMouseOut=\"ppcTI=setTimeout('hideCalendar()',500)\">");
 document.writeln("<layer id=\"monthSelector\" left=\"0\" top=\"0\" width=\"181\" height=\"27\" z-index=\"9\" visibility=\"inherit\">");}
else {
 document.writeln("<p><font color=\"#FF0000\"><b>Error ! The current browser is either too old or too modern (usind DOM document structure).</b></font></p>");}
</script>
<noscript><p><font color="#FF0000"><b>JavaScript is not activated !</b></font></p></noscript>
<table border="1" cellspacing="1" cellpadding="2" width="200" bordercolorlight="#000000" bordercolordark="#000000" vspace="0" hspace="0"><form name="ppcMonthList"><tr><td align="center" bgcolor="#CCCCCC"><a href="javascript:moveMonth('Back')" onMouseOver="window.status=' ';return true;"><font face="Arial, Helvetica, sans-serif" size="2" color="#000000"><b>&lt;&nbsp;</b></font></a><font face="MS Sans Serif, sans-serif" size="1"> 
<select name="sItem" onMouseOut="if(ppcIE){window.event.cancelBubble = true;}" onChange="switchMonth(this.options[this.selectedIndex].value)" style="font-family: 'MS Sans Serif', sans-serif; font-size: 9pt"><option value="0" selected>2000 &#149; January</option><option value="1">2000 &#149; February</option><option value="2">2000 &#149; March</option><option value="3">2000 &#149; April</option><option value="4">2000 &#149; May</option><option value="5">2000 &#149; June</option><option value="6">2000 &#149; July</option><option value="7">2000 &#149; August</option><option value="8">2000 &#149; September</option><option value="9">2000 &#149; October</option><option value="10">2000 &#149; November</option><option value="11">2000 &#149; December</option><option value="0">2001 &#149; January</option></select></font><a href="javascript:moveMonth('Forward')" onMouseOver="window.status=' ';return true;"><font face="Arial, Helvetica, sans-serif" size="2" color="#000000"><b>&nbsp;&gt;</b></font></a></td></tr></form></table>
<table border="1" cellspacing="1" cellpadding="2" bordercolorlight="#000000" bordercolordark="#000000" width="200" vspace="0" hspace="0"><tr align="center" bgcolor="#CCCCCC"><td width="20" bgcolor="#FFFFCC"><b><font face="MS Sans Serif, sans-serif" size="1">Su</font></b></td><td width="20"><b><font face="MS Sans Serif, sans-serif" size="1">Mo</font></b></td><td width="20"><b><font face="MS Sans Serif, sans-serif" size="1">Tu</font></b></td><td width="20"><b><font face="MS Sans Serif, sans-serif" size="1">We</font></b></td><td width="20"><b><font face="MS Sans Serif, sans-serif" size="1">Th</font></b></td><td width="20"><b><font face="MS Sans Serif, sans-serif" size="1">Fr</font></b></td><td width="20" bgcolor="#FFFFCC"><b><font face="MS Sans Serif, sans-serif" size="1">Sa</font></b></td></tr></table>
<script language="JavaScript">
if (document.all) {
 document.writeln("</div>");
 document.writeln("<div id=\"monthDays\" style=\"position:absolute; left:0px; top:52px; z-index:8; width:200px; height:17px; overflow: visible; visibility:inherit; background-color: #FFFFFF; border: 1px none #000000\">&nbsp;</div></div>");}
else if (document.layers) {
 document.writeln("</layer>");
 document.writeln("<layer id=\"monthDays\" left=\"0\" top=\"52\" width=\"200\" height=\"17\" z-index=\"8\" bgcolor=\"#FFFFFF\" visibility=\"inherit\">&nbsp;</layer></layer>");}
else {/*NOP*/}
</script>
