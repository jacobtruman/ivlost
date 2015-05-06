<%
session("lgn") = request.form("lgn")
session("pswd") = Request.Form("pswd")
lgn = request.form("lgn")
pswd = Request.Form("pswd")
prop = Request.Form("prop")

dim objConn,sql,rs
set objConn = server.createobject("ADODB.connection")
objConn.open application("DNTechShareDB_ConnectionString")
sql = "SELECT * FROM USERS where (LOGIN = '"&lgn&"')"
set rs = objConn.execute(sql)


if (lgn = "") then
	session("msg") = "Enter your username and Password"
		if (prop = "") then
			nextpage = "/support_web/login.asp"
		else
			nextpage = "/support_web/login.asp?prop="&prop
		end if
elseif rs.EOF  then
	session("msg") = "Your username and password combination is not correct, please try again."
		if (prop = "") then
			nextpage = "/support_web/login.asp"
		else
			nextpage = "/support_web/login.asp?prop="&prop
		end if
elseif (pswd = rs("PASSWD")) then
	if (rs("SLEVEL") = "2") then
		session("nlvl") = "2ndlevel"
		session("clr") = "#0000FF"
		if (prop = "") then
			nextpage = "/support_web/hsiawebindex.asp"
		else
			nextpage = "/support_web/1stlevel/bulletin2.asp?prop="&prop
		end if
	elseif (rs("SLEVEL") = "1") then
		session("nlvl") = "1stlevel"
		session("clr") = "#FF0000"
		if (prop = "") then
			nextpage = "/support_web/hsiawebindex.asp"
		else
			nextpage = "/support_web/1stlevel/bulletin2.asp?prop="&prop
		end if
	else
		if (prop = "") then
			nextpage = "/support_web/login.asp?ses=1"
		else
			nextpage = "/support_web/login.asp?ses=1&prop="&prop
		end if
		session.abandon
	end if
else
	session("msg") = "Your username and password combination is not correct, please try again."
	if (prop = "") then
		nextpage = "/support_web/login.asp"
	else
		nextpage = "/support_web/login.asp?prop="&prop
	end if
end if

Response.Redirect nextpage
%>