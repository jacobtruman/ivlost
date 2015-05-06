<?php
include($root."/support_web/components/dbtop.php");
if (!isset($htype)){
	$htype = '';
}
if (!isset($name)){
	$name = '';
}
if (!isset($ptype)){
	$ptype = '';
}
if (!isset($cname)){
	$cname = '';
}

if ($cname == 'Datanamics Contact Information'){
	$title = $cname;
}else{
	$title = $htype." ".$name." ".$ptype;
}
?>
<HEAD>
<Title>
	<?php echo $title;?>
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/ows.css'>
</HEAD>
<body marginwidth='0' marginheight='0' scroll='yes' vlink='#0000FF' alink='#0000FF'>
	<table class='ms-main' cellpadding='0' cellspacing='0' border='0' width='100%' height='100%'>
		<TR valign='top'>
			<TD WIDTH='100%' height='29' colspan='3'>
				<table class='ms-bannerframe' border='0' cellspacing='0' cellpadding='3' width='100%'>
					<tr>
						<td nowrap valign='middle' align='left' height='30' width='100%'>
						</td>
					</tr>
				</table>
			</TD>
		</TR>
		<tr>
			<td height='78' valign='top' colspan='3'>
			<?php include($root."/support_web/Components/mainheader2.php");?>
			</td>
		</tr>
		<tr valign=top height=100%>
			<td width='118' height='435' valign='top' rowspan='2' bgcolor="#F0F0F0">
				<?php include($root."/support_web/Components/supportmenu.php");?>
			</td>
			<td height='19' bgcolor='#D8D8D8' align='center'>
				<font size='4' face='Times New Roman'>
					<?php echo $title;?>
				</font>
			</td>
		</tr>
		<tr valign=top height=100%>
			<td width='100%' height='416' valign='top' colspan='2'>
				<table border='0' width="100%">
					<?php include($root."/support_web/Components/contactlinks.php");?>