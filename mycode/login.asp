<head>
<title>Support Web Login</title>
<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/ows.css'>
<script language="JavaScript" src="/support_web/components/md5.js"></script>
</head>
<%
if (request.querystring("ses") = "1") then
session("msg") = "You do not have rights to use support web"
end if
if isempty(request.querystring("prop")) then
else
prop = request.querystring("prop")
end if
%>
<body>
<script>
function vcheck(formname)
{
var pswd = formname.pswd1.value
  formname.pswd.value = hex_md5(pswd);
  return (true);
}
</script>
<form name='formname' method='post' action='pass.asp' onsubmit='return vcheck(this)'>
<input type='hidden' name='pswd'>
<input type='hidden' name='prop' value='<%=prop%>'>
<BR>
<BR>
<BR>
<BR>
<table cellpadding='0' cellspacing='0' border='1' bordercolor='C0C0C0' align='center' width='50%'>
	<TR>
		<TD colspan='2' align='center'>
			<font face='verdana' size='1' color='FF0000'>
				<b>
					<%
					if isempty(session("msg")) then
						msg = "Enter your username and Password"
					else
						msg = session("msg")
					end if
					response.write msg
					%>
				</b>
			</font>
		</TD>
	</TR>
	<TR>
		<TD>
			<font face='verdana' size='1'>
				Login
			</font>
		</TD>
		<TD>
			<input type='text' name='lgn' value='<%=session("lgn")%>' class='formfield'>
		</TD>
	</TR>
	<TR>
		<TD>
			<font face='verdana' size='1'>
				Password
			</font>
		</TD>
		<TD>
			<input type='password' name='pswd1' class='formfield'>
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			<input type='Submit' name='Submit' value='Submit' class='formbutton'>
		</TD>
	</TR>
</table>
</form>
</body>
