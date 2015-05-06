<HEAD>
<Title>
	<%=ptype%>
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/ows.css'>
</HEAD>
<body marginwidth='0' marginheight='0' scroll='yes' vlink='#0000FF' alink='#0000FF'>
	<table class='ms-main' cellpadding='0' cellspacing='0' border='0' width='100%' height='100%'>
		<TR valign='top'>
			<TD WIDTH='100%' height='29' colspan='3'>
				<table class='ms-bannerframe' border='0' cellspacing='0' cellpadding='3' width=100%>
					<tr>
						<td nowrap valign='middle' align='left' height='30'>
						</td>
					</tr>
				</table>
			</TD>
		</TR>
		<tr>
			<td height='78' valign='top' colspan='3'>
			<!--#include virtual='/support_web/Components/mainheader2.asp'-->
			</td>
		</tr>
		<tr valign=top height=100%>
			<td width='118' height='435' valign='top' rowspan='2' bgcolor="#F0F0F0">
				<table>
					<tr>
						<td>
							<form BOTID='0' METHOD='POST' ACTION='/support_web/forms/Results.asp'>
								<font size='2' face='Verdana'>
									Property Name
									<BR>
									<input TYPE='TEXT' NAME='name' VALUE='<%=Request("name")%>' size='20' class='formfield'>
									<BR>
									Property Phone
									<BR>
									<input TYPE='TEXT' NAME='phone' VALUE='<%=Request("phone")%>' size='20' class='formfield'>
									<BR>
									Property Type
									<BR>
									<%
dim objConnd,sqld,rsd
set objConnd = server.createobject("ADODB.connection")
objConnd.open application("propinfo_ConnectionString")
sqld = "SELECT DISTINCT htype FROM prop"
set rsd = objConnd.execute(sqld)
if not rsd.eof then
  with response
  	.write htype&"<BR>"
    .write "<select size='1' NAME='htype' CLASS='formfield'>"
	.write "<option value=''></option>"
    do until rsd.eof
	htype = rsd("htype")
      .write "<option value='" & htype & "' class='formfield'>" & htype & "</option>"
      rsd.movenext
    loop
    rsd.close
    set rsd = nothing
    objConnd.close
    set objConnd = nothing
    .write "</select>"
  end with
else
  rsd.close
  set rsd = nothing
  objConnd.close
  set objConnd = nothing
  response.write "no menu items found"
end if
%>
									<BR>
									<input TYPE='Submit' class='formbutton'>
									<BR>
									<BR>
									<a href='/support_web/hsiawebindex.php' target='_blank'>
										HSIA Main
									</a>
								</font>
						</td>
					</tr>
				</table>
			</td>
			<td height='19' bgcolor='#D8D8D8' align='center'>
				<font size='4' face='Times New Roman'>
					<%=ptype%>
				</font>
			</td>
		</tr>
		<tr valign=top height=100%>
			<td width='100%' height='416' valign='top' colspan='2'>
				<table border='0' width="100%">
					<!--#include virtual='/support_web/Components/contactlinks.asp'-->
				</table>